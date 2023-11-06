function construct_list(form_name, file_path) {


    $("#form-ul").append(

        '<li class="d-block align-top">' +
        '<div class="icheck-primary pl-2">' +
        // '<input type="checkbox" value="" id="check' + count + '">' +
        '<label for="check1"></label>' +
        '</div>' +
        '<span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>' +

        '<div class="mailbox-attachment-info">' +
        '<a href=' + file_path + ' target="_blank" class="mailbox-attachment-name small"><i class="fas fa-paperclip"></i>' +
        form_name + '</a>' +

        '<span class="mailbox-attachment-size clearfix mt-1">' +
        '<span></span>' +
        '<a id="btndownload" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>' +
        '</span></div></li>');





}