// Content Contact Form
// ---------------------------------------------------------------------------------------
$(function () {
    
    var $form = $('#af-form');
    $form.find('.form-control').on('blur', function(){
        $(this).tooltip({placement: 'top', trigger: 'manual'}).tooltip('destroy');
    });

    $("#af-form #submit_btn").click(function () {
        // validate and process form
        // first hide any error messages
        $('#af-form .error').hide();
        var name = $("#af-form input#name").val();
        console.log("Переменная 1: %s ", name);
        if (name == "" || name == "ФИО") {
            $("#af-form input#name").tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $("#af-form input#name").focus();
            return false;
        }
        var email = $("#af-form input#email").val();
        //var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        //console.log(filter.test(email));
        if (!filter.test(email)) {
            $("#af-form input#email").tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $("#af-form input#email").focus();
            return false;
        }
        var message = $("#af-form #input-message").val();
        if (message == "" || message == "Текст сообщения") {
            $("#af-form #input-message").tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $("#af-form #input-message").focus();
            return false;
        }

        //Personal data check box
        var personal_data = document.getElementById('personal_data_check_form');
        if (!(personal_data.checked)) {
            $form.find('#personal_data_check_form').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('#personal_data_check_form').focus();
            return false;
        }else{
            $form.find('#personal_data_check_form').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide');
        }
        var dataString = 'name=' + name + '&email=' + email + '&message=' + message;
        //alert (dataString);return false;

        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: {
                action: 'send_message',
                fio: name,
                email: email,
                message: message,
            },
            timeout: 10000
        }).done(function (result) {    
            $('#af-form').prepend("<div class=\"alert alert-success fade in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button><strong>Сообщение отправлено!</strong></div>");
            $('#af-form')[0].reset();
            $form.find('.form-control').focus().blur();
        }).always(function (result) {
            return false;
        });
        
        return false;
    });
});

// Content Registration Form
// ---------------------------------------------------------------------------------------


$(function () {
    var $form = $('#registration-form');
    $form.find('.form-control').on('blur', function(){
        $(this).tooltip({placement: 'top', trigger: 'manual'}).tooltip('destroy');
    });
    

    // validate and process form
    $form.find('.submit-button').on('click', function () {

        // Project theme
        var project_theme = $form.find('.input-project').val();
        if (  project_theme == 'Тема проекта' ||  project_theme=='' ) {
            $form.find('.input-project').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-project').focus();
            return false;
        }

        // organization
        var org = $form.find('.input-org').val();
        if ((org == 'Наименование организации')||(org == '' )) {
            $form.find('.input-org').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-org').focus();
            return false;
        }

        // Name
        var name = $form.find('.input-name').val();
        if ( name == 'ФИО*' || name=='' ) {
            $form.find('.input-name').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-name').focus();
            return false;
        }

        // position
        var position = $form.find('.input-position').val();
        if ((position == 'Должность')||(position == '' )) {
            $form.find('.input-position').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-position').focus();
            return false;
        }



        // Phone number
        var phone = $form.find('.input-phone').val();
        if ((phone == 'Телефон*')||( phone == '' )) {
            $form.find('.input-phone').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-phone').focus();
            return false;
        }

        // Email address
        var email = $form.find('.input-email').val();
        //var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        //console.log(filter.test(email));
        if (!filter.test(email)) {
            $form.find('.input-email').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-email').focus();
            return false;
        }

        //Motivate file
        var input = document.getElementById('input_file');
        if (!input) {
            $form.find('.input-file').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file').focus();
            return false;
        }
        else if (!input.files) {
            $form.find('.input-file').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file').focus();
            return false;
        }
        else if (!input.files[0]) {
            $form.find('.input-file').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file').focus();
            return false;
        }
        else {
            var motivate_file = input.files[0];
            $form.find('.input-file').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');
        }

        //Personal data check box
        var personal_data = document.getElementById('personal_data_check');
        if (!(personal_data.checked)) {
            $form.find('#personal_data_check').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('#personal_data_check').focus();
            return false;
        }else{
            $form.find('#personal_data_check').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide');
        }

        console.log(motivate_file);

        let fd = new FormData();
        fd.append('action', 'register_user');
        fd.append('fio', name);
        fd.append('project_theme', project_theme);
        fd.append('email', email);
        fd.append('organization', org);
        fd.append('position', position);
        fd.append('phone', phone);
        fd.append('motivate_file', motivate_file);


        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            timeout: 10000
        }).done(function (result) {
            $form.find('.form-alert').append('' +
                '<div class=\"alert alert-success registration-form-alert fade in\">' +
                '<button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>' +
                '<strong>Данные успешно отправлены!</strong>' +
                '</div>' +
                '');
            $form[0].reset();
            $form.find('.form-control').focus().blur();
        }).always(function (result) {
            console.log(result);
            return false;
        });
        return false;        
    });

});

// Slider Registration Form
// ---------------------------------------------------------------------------------------
/*$(function () {

    var $form = $('#registration-form-alt');
    $form.find('.form-control').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide');
    $form.find('.form-control').on('blur', function(){
        $(this).tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide');
    });

    // validate and process form
    $form.find('.submit-button').on('click', function () {

        // Name
        var name = $form.find('.input-name').val();
        if (name == '' || name == 'Name....' || name == 'Name' || name == 'Name *' || name == 'Type Your Name...' || name == 'Name and Surname') {
            $form.find('.input-name').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-name').focus();
            return false;
        }

        // Email address
        var email = $form.find('.input-email').val();
        //var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        //console.log(filter.test(email));
        if (!filter.test(email)) {
            $form.find('.input-email').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-email').focus();
            return false;
        }

        // Phone number
        var phone = $form.find('.input-phone').val();
        if (phone == 'Your Phone Number') {
            phone = '';
        }

        // Price list
        var price = $form.find('.input-price').val();
        if (price == '' || price == 'Select Your Price Tab') {
            $form.find('.input-price').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
            $form.find('.input-price').focus();
            return false;
        }
        else {
            $form.find('.input-price').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide');
        }

        var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&price=' + price;
        //alert(dataString); return false;

        $.ajax({
            type: 'POST',
            url: 'assets/php/registration-form.php',
            data: dataString,
            success: function () {
                $form.find('.form-alert').append('' +
                '<div class=\"alert alert-success registration-form-alert fade in\">' +
                '<button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>' +
                '<strong>Registration Form Submitted!</strong> We will be in touch soon.' +
                '</div>' +
                '');
                $form[0].reset();
                $form.find('.form-control').focus().blur();
            }
        });
        return false;
    });

});*/