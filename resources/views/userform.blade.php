<div>
    <h2>add new user</h2>
   <!-- @if($errors->any())
   @foreach($errors->all() as $error)
    <div style="color:red">{{$error}}</div>
   @endforeach
   @endif -->
    <form method='post' action="adduser" >
        @csrf
    <div class="input-wrapper">
        <input type="text" placeholder="enter username" name="username" value="{{old('username')}}">
        <span>@error('username'){{$message}}@enderror</span>
    </div>
    <div class="input-wrapper">
        <input type="text" placeholder="enter email" name="email" value="{{old('email')}}">
        <span>@error('email'){{$message}}@enderror</span>
    </div>

        <h4>user skills</h4>
      
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="NODE" id="node">
        <label for="node">NODE</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>
        <span>@error('skill'){{$message}}@enderror</span>
        <h4>Gender</h4>
        <input type="radio" name="gender" value="MALE" id="male">
        <label for="male">MALE</label>
        <input type="radio" name="gender" value="FEMALE" id="female">
        <label for="female">Female</label>
        <h4>City</h4> 
        
    <select name="city">
        <option value="delhi">Delhi</option>
        <option value="mumbai">Mumbai</option>
        <option value="chd">Chd</option>
        <option value="nahan">Nahan</option>
        <option value="doon">Doon</option>
        
    </select>   
    <span>@error('username'){{$message}}@enderror</span>
    
    <div class="input-wrapper">
        <button>Add new user</button>
    </div>
    </form>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
<style>
    input{
        border: orange 1px solid;
        height:35px;
        width:200px
        border-radius:2px
    }
    .input-wrapper{
        margin:10px;

    }
    button{
        border: orange 1px solid;
        height:35px;
        width:200px
        border-radius:2px
        cursor:pointer;
    }
    span{
        color:red;
    }
</style>    