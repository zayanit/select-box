$('select').change(function(){
    let selectedCategoryId = $(this).val();
    $.ajax({
        type: "POST",
        url: 'createSubCategories',
        data: {'categoryId': selectedCategoryId},
        complete: function() {
            location.reload();
        }
    });
});