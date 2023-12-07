<h1>welcome</h1>
{{-- <a href="">register</a> --}}
<form  action="{{ route('user.register') }}" method=get>
      @csrf
      
       <button type=submit>register</button>
    </form>
<br>
{{-- <a href="user.login">login</a> --}}
 <form  action="{{ route('user.login') }}" method=get>
      @csrf
      
       <button type=submit>login</button>
    </form>