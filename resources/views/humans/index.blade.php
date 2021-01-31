<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Town</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($humans as $human)
        <form action="{{route('humans.update')}}" method="POST" >
            @csrf
        <tr>
            <th scope="row">{{ $human->id }}</th>
            <input type="hidden" name="id" class="form-control" value="{{ $human->id }}">
            <td><input type="text" name="first_name" class="form-control" value="{{ $human->first_name }}"></td>
            <td><input type="text" name="last_name" class="form-control" value="{{ $human->last_name }}"></td>
            <td><input type="text" name="email" class="form-control" value="{{ $human->email }}"></td>
            <td><input type="text" name="phone" class="form-control" value="{{ $human->phone }}"></td>
            <td><input type="text" name="address" class="form-control" value="{{ $human->address }}"></td>
            <td><input type="text" name="town" class="form-control" value="{{ $human->town }}"></td>
            <td>
               <input type="submit" class="edit" value="Edit">
                <a href="{{route('humans.destroy', $human->id)}}">Delete</a>
            </td>
          </tr>
        </form>
          @endforeach
    </tbody>
  </table>


<script>
