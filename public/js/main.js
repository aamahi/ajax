$.ajaxSetup(function () {
    headers:{
        'X-CSRF-TOKEN'; $('meta[name="csrf-token"]')
            .attr('content')
    }
});

$(#createCategory).submit(function (e) {
    e.preventDefault();
    //form data
    let formData = {
        category_name: $('#createCategory input[category_name="category_name"]')
            .val(),
        user_id: $('#createCategory input[user_id="user_id"]')
            .val(),
        image: $('#createCategory input[image="image"]')
            .val()
    }
    console.log(formData)
    $.ajax({
        type:'post',
        URL:'/store',
        data:formData,
        sucess:function (data) {
            console.log(data)
        },
        error: function (data) {
            console.log(data)
        }

    })
})
