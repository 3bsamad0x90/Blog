$(".message").submit(function (event) {
    event.preventDefault();
    let url = $(this).attr("data-url");
    $.post(
        url,
        {
            name: $('input[name="name"]').val(),
            email: $('input[name="email"]').val(),
            phone: $('input[name="phone"]').val(),
            message: $('textarea[name="message"]').val(),
        },
        function (data) {
            console.log(data);
        });
});
