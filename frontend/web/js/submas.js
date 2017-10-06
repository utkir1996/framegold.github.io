$(function () {

   function ProductsModal(id) {

       var modalDiv=$('#ModalBodyProduct');

       var modal=$('#ProductModal');

       $.ajax({

           type:'GET',

           url:'/products/modal',

           data:{id:id},

           success:function (res) {

               modalDiv.html(res);

               modal.modal('show');

           },

           error:function () {

               alert(id);

           }

       });
   }

    $('#liModalGrid').on('click','#modalProductGrid',function(){
        var  id=$(this).data('id');
        ProductsModal(id);
    });
    $('#liModalList').on('click','#modalProductList',function(){

        var  id=$(this).data('id');
        ProductsModal(id);
    });


});



