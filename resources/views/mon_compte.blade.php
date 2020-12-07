


@extends('layout.head')


@section('content')

</br>
</br>

<h5>
    <p>Mon compte / Identification </p>


<div class="container">

<form>
<div class="left">
    <div class="form-group1">
    <h4> Déjà membre ? connectez-vous </h4></br>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nous ne communiquerons jamais votre email.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn-submit btn-primary">Submit</button>
    </div>
    </form> </div>

    <div class="right">
    <div class="form-group2">
    <h4> Créer un compte </h4></br>
    <div class="form-group">
        <label for="exampleInputEmail1">votre email*</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn-submit btn-primary">Submit</button>
    </div>
    </form>
    </div>

</div>







</h5>


</br>
</br>

</br>
</br>


</br>
</br>



@endsection