$(document).ready(function ($) {
    // Calendar
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
    
    // Services
    $('.service').click(function () {

        // Service visibility
        var id = $(this).attr('id');
        var divClass = '.' + id;

        $('.service').fadeOut('slow', function () {
            $(divClass).fadeIn('slow');
        });

        // Control the breadcrumb
        var subService = $(this).data('service-value');
        var subServiceId = $(this).attr('id');
        var list = document.createElement('li');
        var anchor = document.createElement('a');
        var serviceClass = document.createAttribute('data-service-div-class');
        var anchorText = document.createTextNode(subService);

        anchor.appendChild(anchorText);
        serviceClass.value = '' + subServiceId;
        anchor.setAttributeNode(serviceClass);

        list.className = 'breadcrumb-item';
        list.appendChild(anchor);

        $(document).find('.breadcrumb').hide();
        $(document).find('.breadcrumb').append(list);
        $(document).find('.breadcrumb').show('slow');
    });

    // control the breadcrumb and services according to breadcrumb selection
    $('body').on('click', '.breadcrumb-item a', function () {
        $(this).parent().nextAll().hide();
        $(document).find('#allServices').children().hide();
        var divClass = $(this).data('service-div-class');
        divClass = '.' + divClass;
        $(document).find(divClass).show('slow');
    });
});
