@extends('layouts.dashboardmaster')
@section('content')
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>All Planes</h2>

						<span class="main__title-stat"></span>

						<div class="main__title-wrap">
							<!-- filter sort -->
							<div class="filter" id="filter__sort">
								<span class="filter__item-label">Sort by:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Date created">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
									<li>Date created</li>
									<li>Name</li>
								</ul>
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Key word..">
								<button type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- reviews -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Plane Name</th>
									<th>AUTHOR</th>
									<th>Plane Description</th>
									<th>Plane Price</th>
									<th>Plane Discount</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
@foreach ($memberships_plane as $plane)
<tr>
    <td>
        <div class="main__table-text">{{ $loop->iteration }}</div>
    </td>
    <td>
        <div class="main__table-text"><a href="#">{{ $plane->plane_name }}</a></div>
    </td>
    <td>
        <div class="main__table-text">{{ Auth::user()->name }}</div>
    </td>
    <td>
        <div class="main__table-text">{{ Str::limit($plane->plane_description, 25) }}</div>
    </td>
    <td>
        <div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> {{ $plane->plane_price }} $</div>
    </td>
    <td>
        <div class="main__table-text">{{ $plane->plane_discount }} %</div>
    </td>
    <td>
        <div class="main__table-text">{{ $plane->created_at }}</div>
    </td>
    <td>
        <div class="main__table-btns">
            <a href="{{ route('membership.show', $plane->id) }}" class="main__table-btn main__table-btn--view open-modal">
                <i class="icon ion-ios-eye"></i>
            </a>
            <form action="{{ route('membership.destroy', $plane->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="main__table-btn main__table-btn--delete open-modal" type="submit"><i class="icon ion-ios-trash"></i></button>
            </form>
        </div>
    </td>
</tr>
@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- end reviews -->


			</div>
		</div>
	</main>
	<!-- end main content -->
@endsection