function makeSortable() {
    $("#sortable").sortable({
        placeholder: "ui-state-highlight",
        handle: ".handle",
        update: function (event, ui) {
            var id = $(ui.item).data().id;
            var position = $(ui.item).index() + 1;

            moveTo(id, position, ui.item);
        }
    });
    $("#sortable").disableSelection();
}

function moveTo(id, position, element) {
    $.ajax({
        url: '/live-channels/move_to/' + id + '/' + position,
        beforeSend: function(){
            $('body').append('<div id="LoadingSpin"></div>')
        },
        success: function(resp){
            $('#content').html(resp);

            makeSortable();
        },
        error: function(){
            alert('Error');
        },
        complete: function(){
            $('#LoadingSpin').remove();
        }
    });
}

$(function(){
    makeSortable();
});

$(document).on('xcrud.content.updated', function(){
    makeSortable();
});

$(document).on('mouseenter', '[data-bs-toggle="tooltip"]', function(){
    var tooltip = bootstrap.Tooltip.getInstance(this);

    if (tooltip == null) tooltip = new bootstrap.Tooltip(this);

    tooltip.show();
});