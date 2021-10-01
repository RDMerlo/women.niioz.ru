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

function getValidInputs(formInputsNames, $form)
{
    let resultData = {};
    for(let inputName in formInputsNames)
    {
        let input = $form.find(`.${inputName}`);
        let inputValue = input.val();

        //те, что не нужно проверять (доп. поля)
        //TODO: вынести за функцию
        if (inputName == "input-video")
        {
            if (inputValue != formInputsNames[inputName])
                resultData[inputName] = inputValue;
            else
                resultData[inputName] = "";
            break;
        }

        if (inputValue === formInputsNames[inputName] ||  !inputValue)
        {
            input.tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            input.focus();
            return null;
        }
        else
        {
            resultData[inputName] = inputValue;
        }


    }
    return resultData;
}


// Register participants
// ---------------------------------------------------------------------------------------
$(function () {
    var $form = $('#participant-add-form');
    $form.find('.form-control').on('blur', function(){
        $(this).tooltip({placement: 'top', trigger: 'manual'}).tooltip('destroy');
    });


    // validate and process form
    $form.find('.submit-button').on('click', function () {

        //FIXME: сделать через enum и switch
        let TipUser = "default"; //Individual, Organization

        let inputData = null;

        let phone = "";
        let email = "";

        let phoneSupervisorOrganization = "";
        let phoneProjectManager = "";
        let emailSupervisorOrganization = "";
        let emailProjectManager = "";

        if (document.getElementById('individual-check').checked)
        {
            TipUser = "Individual";

            let inputPersonal = null;
            inputPersonal = {
                'input-ind-fio': 'ФИО*',
                'input-ind-living-place': 'Субъект РФ, населенный пункт*',
            };

            inputData = getValidInputs(inputPersonal, $form);

            if (inputData === null)
                return false;

            // Phone number
            phone = $form.find('.input-ind-phone').val();
            if (phone === 'Телефон*'|| !phone) {
                $form.find('.input-ind-phone').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-ind-phone').focus();
                return false;
            }

            // Email address
            email = $form.find('.input-ind-email').val();
            let filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
            if (!filter.test(email)) {
                $form.find('.input-ind-email').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-ind-email').focus();
                return false;
            }
        }


        if (document.getElementById('org-check').checked)
        {
            TipUser = "Organization";

            let inputPersonalOrganization = null;
            inputPersonalOrganization = {
                'input-org-name': 'Наименование организации*',
                'input-org-lead-fio': 'ФИО(полностью)*',
                'input-org-lead-position': 'Должность*',
                'input-org-living-place': 'Субъект РФ, населенный пункт*',
                'input-org-project-sphere': 'Сфера деятельности проекта*',
            };

            inputData = getValidInputs(inputPersonalOrganization, $form);

            if (inputData === null)
                return false;

            // Phone Supervisor Organization
            phoneSupervisorOrganization = $form.find('.input-org-lead-phone').val();
            if (phoneSupervisorOrganization === 'Телефон*'|| !phoneSupervisorOrganization) {
                $form.find('.input-org-lead-phone').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-org-lead-phone').focus();
                return false;
            }

            // Email address Supervisor Organization
            emailSupervisorOrganization = $form.find('.input-org-lead-email').val();
            let filterSupervisorOrganization = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
            if (!filterSupervisorOrganization.test(emailSupervisorOrganization)) {
                $form.find('.input-org-lead-email').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-org-lead-email').focus();
                return false;
            }


            let inputPersonalProjectManager = null;
            inputPersonalProjectManager = {
                'input-org-proj-lead-fio': 'ФИО(полностью)*',
                'input-org-proj-lead-position': 'Должность*',
            };

            let inputDataProjectManager = null;
            inputDataProjectManager = getValidInputs(inputPersonalProjectManager, $form);

            if (inputDataProjectManager === null)
                return false;

            //запихиваем свойства второго в первый
            jQuery.extend(inputData, inputDataProjectManager);

            // Phone Project Manager
            phoneProjectManager = $form.find('.input-org-proj-lead-phone').val();
            if (phoneProjectManager === 'Телефон*'|| !phoneProjectManager) {
                $form.find('.input-org-proj-lead-phone').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-org-proj-lead-phone').focus();
                return false;
            }

            // Email address Project Manager
            emailProjectManager = $form.find('.input-org-proj-lead-email').val();
            let filterProjectManager = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
            if (!filterProjectManager.test(emailProjectManager)) {
                $form.find('.input-org-proj-lead-email').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                $form.find('.input-org-proj-lead-email').focus();
                return false;
            }
        }

        let inputProject = null;
        inputProject = {
            'input-proj-title': 'Название*',
            'input-proj-task': 'Цель и задачи*',
            'input-project-essence': 'Суть проекта*',
            'input-auditory': 'Целевая аудитория проекта*',
            'input-status': '«Зрелость» проекта*',
            'input-results': 'Результаты проекта*',
            'input-realize-info': 'Информация о реализации проекта*',
            'input-video': 'Ссылка на видеоролик, иллюстрирующий суть проекта, продолжительностью не более 3 мин.',
        };

        let inputDataProject = null;
        inputDataProject = getValidInputs(inputProject, $form);

        if (inputDataProject === null)
            return false;

        //запихиваем свойства второго в первый
        jQuery.extend(inputData, inputDataProject);

        /*-------*/
        //Presentation file
        //Presentation file
        let presentationFile = null;
        let inputPresentation = document.getElementById('input_presentation');
        if (!inputPresentation) {
            $form.find('.input-file-presentation').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file-presentation').focus();
            return false;
        }
        else if (!inputPresentation.files) {
            $form.find('.input-file-presentation').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file-presentation').focus();
            return false;
        }
        else if (!inputPresentation.files[0]) {
            $form.find('.input-file-presentation').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('.input-file-presentation').focus();
            return false;
        }
        else {
            presentationFile = inputPresentation.files[0];
            $form.find('.input-file-presentation').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');
        }


        //Photo file
        // let photoFile = null;
        // let input = document.getElementById('input_file');
        // if (!input) {
        //     $form.find('.input-file-photo').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
        //     $form.find('.input-file-photo').focus();
        //     return false;
        // }
        // else if (!input.files) {
        //     $form.find('.input-file-photo').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
        //     $form.find('.input-file-photo').focus();
        //     return false;
        // }
        // else if (!input.files[0]) {
        //     $form.find('.input-file-photo').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
        //     $form.find('.input-file-photo').focus();
        //     return false;
        // }
        // else {
        //
        //     console.log("15");
        //     photoFile = input.files[0];
        //     $form.find('.input-file-photo').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');
        // }
        //Photo file 2


        let photoFile = null;
        let input = document.getElementById('input_file');
        photoFile = input.files[0];
        $form.find('.input-file-photo').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');

        let photoFile2 = null;
        let input2 = document.getElementById('input_file_2');
        photoFile2 = input2.files[0];
        $form.find('.input-file-photo-2').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');

        //Photo file 3
        let photoFile3 = null;
        let input3 = document.getElementById('input_file_3');
        photoFile3 = input3.files[0];
        $form.find('.input-file-photo-3').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');

        //Video file
        let videoFile = null;
        let inputVideo = document.getElementById('input_file_video');
        videoFile = inputVideo.files[0];
        $form.find('.input-file-video').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('hide');

/*-------*/
        let confirm = $form.find('#personal_data_check');
        if ( !confirm.is(':checked')) {
            $form.find('#personal_data_check').tooltip({placement: 'top', trigger: 'manual'}).tooltip('hide').tooltip('show');
            $form.find('#personal_data_check').focus();
            return false;
        }

        let fd = new FormData();
        console.log("29\n");
        for(let inputName in inputData){
            fd.append(inputName, inputData[inputName]);
        }

        console.log("30\n");
        fd.append('email', email);
        fd.append('org-lead-email', emailSupervisorOrganization);
        fd.append('org-proj-lead-email', emailProjectManager);
        fd.append('phone', phone);
        fd.append('org-lead-phone', phoneSupervisorOrganization);
        fd.append('org-proj-lead-phone', phoneProjectManager);
        fd.append('photo_file', photoFile);

        if (presentationFile!=null)
            fd.append('presentation_file', presentationFile);
        if (photoFile2!=null)
            fd.append('photo_file_2', photoFile2);
        if (photoFile3!=null)
            fd.append('photo_file_3', photoFile3);
        if (videoFile!=null)
            fd.append('video_file', videoFile);

        $form.find('button').addClass('button_disabled');

        fd.append('action', 'add_participant');
        console.log("32\n");
        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            timeout: 10000
        }).done(function (result) {
            console.log('success');
            console.log(result);

            if(result === 'Извините, это имя пользователя уже существует!'){
                $form.find('.form-alert').html('' +
                    '<div class=\"alert alert-danger registration-form-alert fade in\">' +
                    '<button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>' +
                    '<strong>Извините, это имя пользователя уже существует!</strong>' +
                    '</div>' +
                    '');
            }else{
                $form.find('.form-alert').html('' +
                    '<div class=\"alert alert-success registration-form-alert fade in margin-top-20\">' +
                    '<button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>' +
                    '<strong>Спасибо, Ваша анкета принята.</strong>' +
                    '</div>' +
                    '');
                // $form[0].reset();
            }
            $form.find('button').removeClass('button_disabled');
            // $form[0].reset();
        }).fail(function (result) {
            console.log('failed');
            console.log(result);
            let errorMsg = 'Извините, произошла ошибка';
            $form.find('.form-alert').html('' +
                '<div class=\"alert alert-danger registration-form-alert fade in\">' +
                '<button class=\"close\" data-dismiss=\"alert\" type=\"button\">&times;</button>' +
                '<strong>' + errorMsg + '</strong>' +
                '</div>' +
                '');
            $form.find('button').removeClass('button_disabled');
            return false;
        });
        return false;
    });
});

$('.input-age').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9]/g)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
});