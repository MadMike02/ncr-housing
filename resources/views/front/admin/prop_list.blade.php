@extends('front.layout.admin.main')
        
@section('content')
<div id="main-wrapper">
		
			<div class="page-title pt-5" style="background-color:#008888">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome!</h2>
							<span class="ipn-subtitle text-light">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ User Dashboard ================================== -->
			<section>
				<div class="container-fluid">
					<div class="row">
						
                    @include('front.layout.admin.sidemenu')
						
						<div class="col-lg-9 col-md-8">
							<div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>My Property</h4>
									<center id="add_property_loader">
										<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
									</center>
								</div>
								
								<div class="row" id="prop">
								
									
									
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
@endsection

@section('custom_js')
<script>
	$(window).on("load",function(){
		@if(session("message"))
			swal({
				title: "{{session("message")}}",
				icon: "error",
			});
		@elseif(session("message2"))
		swal({
				title: "{{session("message2")}}",
				icon: "success",
			});
		@endif
	});
$(document).ready(function(){
	
	 $.ajax({
		headers: { 'Authorization': 'Bearer '+$('#cookie').val() },
			 	method: "GET",
			 	dataType: "JSON",
			 	url: $('#url').val()+"my-property",
			 	}).done(function( msg ) {
					 $('#add_property_loader').css("display","none");

			 		if(msg.status == "success")
					{
						// console.log(msg);
						if(msg.data.length > 0)
						{
							let text = "";
							const properties = msg.data;

							properties.forEach(myFunction);

							document.getElementById("prop").innerHTML = text;
							
							function myFunction(item, index) {
								
								text += '<div class="col-md-12 col-sm-12 col-md-12"><div class="singles-dashboard-list"><div class="sd-list-left"><img src='+msg.data[index].gallery.bannerImg.imgUrl+' class="img-fluid" alt="Images" style="width:250px;height:200px;object-fit:cover"></div><div class="sd-list-right"><h4 class="listing_dashboard_title"><a href="#" class="theme-cl">'+msg.data[index].title+'</a></h4><div class="user_dashboard_listed"><i class="fas fa-rupee-sign"></i>'+msg.data[index].price+'</div><div class="user_dashboard_listed">Address: <a href="javascript:void(0);" class="theme-cl">'+msg.data[index].location.address+'</a> , Area:'+msg.data[index].dimensions+' sq ft</div><div class="action"><a href="property/update/'+msg.data[index]._id+'" data-toggle="tooltip" data-placement="top" title="View/Edit"><i class="ti-pencil"></i></a><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Delete Property" data-id="'+msg.data[index]._id+'" onclick="deleteProp($(this))" class="delete"><i class="far fa-trash-alt"></i></a></div></div></div></div>';
							}
						}
						else
						{
							document.getElementById("prop").innerHTML = "<h5 class='mt-4 ml-3 text-danger'>NO PROPERTIES POSTED YET</h5>";
						}
						

					}
					
			 		}).fail(function(error) {
			 			console.log(error);
			 			 $('#login_loader').css("display","none");
			 			 $('#login').modal('hide');
						
			 		});
});

function deleteProp(elem)
	{
		var id = elem.attr("data-id");
		// console.log(id);
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this property!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				
				$.ajax({
				beforeSend: function(request) {
					request.setRequestHeader("authorization", "bearer "+$('#cookie').val());
				},
				method: "DELETE",
				dataType: "JSON",
				url: $('#url').val()+"delete/property/"+id,
				}).done(function( msg ) {
					// console.log(msg);
					if(msg.status == "success")
					{
						swal(msg.message,{
							icon: "success",
						})
						.then((value) => {
							if(value)
							{
								location.reload();
							}
							else{
								location.reload();
							}
						});

						
					}
					else{
						swal(msg.message,{
							icon: "error",
						})
						.then((value) => {
							if(value)
							{
								location.reload();
							}
							else{
								location.reload();
							}
						});
					}
					
					
 				}).fail(function(error) {
					swal("Unable to delete property. Please contact administrator.", {
							icon: "error",
						});
					
				});
				
				
			} else {
				swal.close();
			}
			});
	}




</script>
@endsection