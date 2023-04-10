$(document).ready(function () {
    $('.addToCart').click(function (e) { 
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty= $(this).closest('.product_data').find('.qty-input').val();
    
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    
    
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id':product_id,
                'product_qty':product_qty
            },
            
            success: function (response) {
                swal(response.status)
                loadcart()

            },
           
        });
    });


    $('.addToWishlist').click(function (e) { 
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var token = $('meta[name="csrf-token"]').attr('content');

    
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    
    
        $.ajax({
            method: "GET",
            header:{
                'X-CSRF-TOKEN': token
              },
            url: "/add-to-wishlist",
            data: {
                'product_id':product_id,
            },
            
            success: function (response) {
                swal(response.status)
                loadwishlist();

            },

        });
    });


    $('.increment-btn').click(function (e) { 
            e.preventDefault();
            
            //var inc_value = $('.qty-input').val();
            var inc_value =$(this).closest('.product_data').find('.qty-input').val();
            var value  =parseInt(inc_value,10);
            value = isNaN(value) ? 0 : value;
            if(value<10){

                value++;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }
    });
    $('.decrement-btn').click(function (e) { 
            e.preventDefault();
            
            //var inc_value = $('.qty-input').val();
             var dec_value =$(this).closest('.product_data').find('.qty-input').val();
            var value  =parseInt(dec_value,10);
            value = isNaN(value) ? 0 : value;
            if(value>1){

                value--;
                $(this).closest('.product_data').find('.qty-input').val(value);
            }
        });
      
    
              

    $('.delete-cart-item').click(function (e) { 
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
            
            
            var prod_id =$(this).closest('.product_data').find('.prod_id').val();
            $.ajax({
                method: "POST",
                url: "delete-cart-item",
                data: { 
                    'prod_id':prod_id,
                },
                success: function (response) {
                    window.location.reload()
                   swal("",response,"success")
                }
               
            });
          
            
              
        });
    $(".delete-wishlist-item").click(function (e) { 
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "/remove-wishlist-item",
                data: {
                    'prod_id':prod_id,
                },
                
                success: function (response) {
                    window.location.reload()
                   swal("",response,"success")
                }
               
            });
            
        });
  

    $('.changeQuantity').click(function (e) { 
            e.preventDefault();
            var prod_id =$(this).closest('.product_data').find('.prod_id').val();
            var qty =$(this).closest('.product_data').find('.qty-input').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
            
            data= { 
                'prod_id':prod_id,
                'prod_qty':qty
            }
            $.ajax({
                method: "POST",
                url: "update-cart",
                data:data,
                success:function(response){
                    window.location.reload();
                }
               
            });
          
            
              
        });
loadcart()
    function loadcart(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            method: "POST",
            url: "/load-cart-data",
            success:function(response)
            {
                $(".cart-count").html('');  
                $(".cart-count").html(response.count);  


            }
            
           
           
        });
    }

    loadwishlist()

    function loadwishlist(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            method: "POST",
            url: "/load-wishlist-data",
            success:function(response)
            {
                $(".wishlist-count").html('');  
                $(".wishlist-count").html(response.count);  


            }
            
           
           
        });
    }


 

})
