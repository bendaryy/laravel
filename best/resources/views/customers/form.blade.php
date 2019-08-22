<div class="form-group">
				<label for="name">name</label>
				<input type="text" name="name" placeholder="name" value="{{old('name')??$customer->name}}" id="name" class="form-control">
				<p class="error">{{$errors->first('name')}}</p>
				</div>



				<div class="form-group">

				<label for="email">E-mail</label>
				<input type="text" name="email" placeholder="email" value="{{old('email')??$customer->email}}" id="email" class="form-control">
				<p class="error">{{$errors->first('email')}}</p>
				</div>


<div class="form-group">
	<label for="active">statues</label>
	<select name="active" id="active" class="form-control">
		<option value="" disabled selected='selected'>--choose your status--</option>

		@foreach($customer->activeOptions() as $activeOptionsKey => $activeOptionsValue)

		<option value="{{$activeOptionsKey}}" {{$customer->active == $activeOptionsValue ?'selected':''}}>{{$activeOptionsValue}}</option>
		
		@endforeach
	</select>
	<p class="error">{{$errors->first('active')}}</p>
</div>
				<div class="form-group">
					<label for="company_id">company</label>
					<select name="company_id" id="company_id" class="form-control">
						<option value="" disabled selected hidden>--choose your company--</option>
						@foreach($companies as $company)
						<option value="{{$company->id}}" {{$company->id == $customer->company_id?'selected':''}}>{{$company->name}}</option>
						@endforeach
						
					</select>
					<p class="error">{{$errors->first('active')}}</p>

						<div class="form-group d-flex flex-column">
							<label for="image">choose your picture</label>
							<input type="file" name="image" id='image'>
						</div>
						<p class="error">{{$errors->first('active')}}</p>
				</div>
				@csrf