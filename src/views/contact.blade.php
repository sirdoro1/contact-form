<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>This is a testing process for package</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center">
              <h3>Contact Form</h3>
              <p>This is a contact form</p>
            </div>
            <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </div>
            <div class="col-md-12 mb-2">
              <form action="{{route('contact')}}" class="form" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Enter Name">
                    @error('name')
                        <span class="text-danger" role="alert"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Email">
                    @error('email')
                        <span class="text-danger" role="alert"><small>{{ $message }}</small></span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone')}}" placeholder="Enter Phone">
                    @error('phone')
                        <span class="text-danger" role="alert"><small>{{ $message }}</small></span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea type="text" name="message" class="form-control" id="message" placeholder="Enter Message Here"></textarea>
                  @error('message')
                        <span class="text-danger" role="alert"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary col-md-12">Send Message</button>
            </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
