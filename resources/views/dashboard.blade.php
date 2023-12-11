
    <link rel="stylesheet" href="{{ asset('assets/css/twotemplatemo-chain-app-dev.css') }}">

  <div class="containerdua">
    <div class="headerdua"> 
      <div class="main"> 
        <br/>
        <br/>
        <br/>
        <br/>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <input id="username" type="text" placeholder="Username" class="input" name="username" required>
        <br>
        <input id="password" type="password" placeholder="Password" class="input" name="password" required>        
        <br>
        <span class="text-danger">@error('username'){{ $message }}@enderror</span>
        <br/>
        <button class="buttonlogin textplus">{{ __('Login') }}</button>
        </div>
        <br/>
        <br/>
    </div>
      </form>
    </div>
  </div>
  

 

 
</body>
</html>