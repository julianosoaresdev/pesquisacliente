$(function() {
    $('form[name=frmPesquisa]').submit(function(event) {
        event.preventDefault();
        var target = "#boxMsg";
        showMsg(target);
        $.ajax({
            type: "post",
            url: "/gravapesquisa",
            cache: false,
            data: $(this).serialize(),
            dataType: 'text',
            success: function(retorno) {
                console.log(retorno);
                if (parseInt(retorno) == 1) {
                    $(target).html("Logado com sucesso, aguarde...");
                    hiddMsg(target, 3000);
                    redUrl('dashboard', 3000);
                } else {
                    $(target).html("Usuário ou senha incorretos!");
                    hiddMsg(target, 3000);
                }
            },
            beforeSend: function() {
                $(target).html("<i class=\"fa fa-refresh fa-spin fa-lg\"></i>");
            }
        });
    });
})

function redUrl(url, t) {
    setTimeout(function() {
        location = url;
    }, t);
}

function hiddMsg(target, t) {
    setTimeout(function() {
        $(target).fadeOut();
    }, t);
}

function showMsg(target) {
    $(target).html("&nbsp;");
    $(target).fadeIn();
}