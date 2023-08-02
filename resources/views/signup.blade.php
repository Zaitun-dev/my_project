<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">
    <title>signup</title>
</head>
<body>
    <form action="/signup" method="POST" class="text-center mt-5">
        @csrf
            <div class="form-row mb-2">
              <div class="col-4"></div>
              <div class="col-4">
                <input 
                    type="text" 
                    class="form-control"
                    name="name" 
                    placeholder="name">
                    
              </div>
              <div class="col-4"></div>
            </div>
            <div class="form-row mb-2">
                <div class="col-4"></div>
                <div class="col-4">
                    <input 
                    type="email"  
                    class="form-control" 
                    name="email"
                    placeholder="email">
                  </div>
                <div class="col-4"></div>  
            </div>
            <div class="form-row mb-2">
                <div class="col-4"></div>
                <div class="col-4">
                    <input 
                    type="password" 
                    class="form-control" 
                    name="password"
                    placeholder="password">
                  </div>
                <div class="col-4"></div>  
            </div>
            
            {{-- <div class="form-row mb-2" hidden>
              <div class="col-4"></div>
              <div class="col-4">
                  <input 
                  type="text" 
                  class="form-control" 
                  name="role"
                  value="USER"
                   >
                </div>
              <div class="col-4"></div>  
          </div> --}}
          <button type="submit" class="btn btn-success">Signup</button>
    </form>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>