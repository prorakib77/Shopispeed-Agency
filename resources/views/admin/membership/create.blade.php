@extends('layouts.dashboardmaster')
@section('content')
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Plane</h2>
					</div>
				</div>
				<!-- end main title -->


				<!-- content tabs -->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
						<div class="col-12">
							<div class="row">
								<!-- details form -->
								<div class="col-12 col-lg-6">
									<form action="{{ route('membership.store') }}" method="POST" class="form form--profile">
                                        @csrf
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Membership Plane</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="plane_name">Plane Name</label>
													<input id="plane_name" type="text" name="plane_name" class="form__input" placeholder="Plane Name">
												</div>
											</div>
											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="plane_price">Plane Price</label>
													<input id="plane_price" type="text" name="plane_price" class="form__input" placeholder="Plane Price">
												</div>
											</div>
											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="plane_discount">Plane Discount %</label>
													<input id="plane_discount" type="text" name="plane_discount" class="form__input" placeholder="Plane Discount %">
												</div>
											</div>
											<div class="col-12 col-md-12 col-lg-12 col-xl-12">
												<div class="form__group">
													<label class="form__label" for="plane_description">Plane Description</label>
													<textarea style="height: 100px" id="plane_description" type="text" name="plane_description" class="form__input" placeholder="Plane Description"> </textarea>
												</div>
											</div>

											<div class="col-12">
												<button class="form__btn" type="submit">Add</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end details form -->

							</div>
						</div>	
					</div>


				</div>
				<!-- end content tabs -->
			</div>
		</div>
	</main>
	<!-- end main content -->
@endsection