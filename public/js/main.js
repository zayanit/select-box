$('select').change(function(){
    let selectedCategory = $(this).val();
    $.ajax({
        type: "POST",
        url: 'createSubCategories',
        data: {'categoryId': selectedCategory},
        complete: function() {
            location.reload();
        }
    });
});