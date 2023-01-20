<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;

/**
 * LiveChannels Controller
 *
 * @property \App\Model\Table\LiveChannelsTable $LiveChannels
 * @method \App\Model\Entity\LiveChannel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LiveChannelsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['getPlaylist']);
    }

    /**
     * Index method
     *
     * @return Response|null|void Renders view
     */
    public function index()
    {
        $liveChannels = $this->LiveChannels->find('all');

        $this->set(compact('liveChannels'));
    }

    /**
     * View method
     *
     * @param string|null $id Live Channel id.
     * @return Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $liveChannel = $this->LiveChannels->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('liveChannel'));
    }

    /**
     * Add method
     *
     * @return Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $liveChannel = $this->LiveChannels->newEmptyEntity();
        if ($this->request->is('post')) {
            $liveChannel = $this->LiveChannels->patchEntity($liveChannel, $this->request->getData());
            if ($this->LiveChannels->save($liveChannel)) {
                $this->Flash->success(__('The live channel has been saved.'));

                return $this->setAction('index');
            }
            $this->Flash->error(__('The live channel could not be saved. Please, try again.'));
        }
        $this->set(compact('liveChannel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Live Channel id.
     * @return Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $liveChannel = $this->LiveChannels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $liveChannel = $this->LiveChannels->patchEntity($liveChannel, $this->request->getData());
            if ($this->LiveChannels->save($liveChannel)) {
                $this->Flash->success(__('The live channel has been saved.'));

                return $this->setAction('index');
            }
            $this->Flash->error(__('The live channel could not be saved. Please, try again.'));
        }
        $this->set(compact('liveChannel'));
    }

    /**
     * Duplicate method
     *
     * @param string|null $id Live Channel id.
     * @return Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function duplicate($id = null)
    {
        $liveChannel = $this->LiveChannels->get($id);
        $liveChannel->id = null;
        $liveChannel->setNew(true);
        if ($this->request->is('post')) {
            $liveChannel = $this->LiveChannels->patchEntity($liveChannel, $this->request->getData());
            if ($this->LiveChannels->save($liveChannel)) {
                $this->Flash->success(__('The live channel has been saved.'));

                return $this->setAction('index');
            }
            $this->Flash->error(__('The live channel could not be saved. Please, try again.'));
        }
        $this->set(compact('liveChannel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Live Channel id.
     * @return Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $liveChannel = $this->LiveChannels->get($id);
        if ($this->LiveChannels->delete($liveChannel)) {
            $this->Flash->success(__('The live channel has been deleted.'));
        } else {
            $this->Flash->error(__('The live channel could not be deleted. Please, try again.'));
        }

        return $this->setAction('index');
    }

    /**
     * Move to method
     *
     * @param int $id Live Channel id.
     * @param int $newPosition
     * @return Response|null
     */
    public function moveTo($id = null, $newPosition = 1)
    {
        $liveChannels = $this->LiveChannels->find('all');
        $data = [];
        foreach ($liveChannels as $i => $liveChannel) {
            if ($liveChannel->id == $id) continue;
            if (($i + 1) == $newPosition) $data[] = (int)$id;
            $data[] = $liveChannel->id;
        }

        if (!$this->LiveChannels->setOrder($data)) {
            $this->Flash->error(__('The channel could not be moved!'));
        }

        $this->setAction('index');
    }

    /**
     * getPlaylist method
     */
    public function getPlaylist() {
        $liveChannels = $this->LiveChannels->find('all', [
            'fields' => [
                'LiveChannels.id',
                'LiveChannels.name',
                'LiveChannels.language',
                'LiveChannels.country',
                'LiveChannels.category',
                'LiveChannels.uri',
                'LiveChannels.frame_height',
            ],
            'order' => [
                'LiveChannels.position' => 'asc'
            ]
        ]);
        $this->set(compact('liveChannels'));
        $this->viewBuilder()->setLayout('ajax');
    }
}
