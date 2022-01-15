@extends('layouts.masters')


@section('content')
<style>
    .gulugulu {
  box-sizing: border-box;
  /* background: linear-gradient(to right bottom, #000046, #5B86E5); */
  height: 100vh;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}
.gigachad {
  height: 620px;
  width: 460px;
  background-color: white;
  border-radius: 24px;
  overflow: hidden;
}

.headerbola {
  width: 100%;
  height: 32%;
  background-image: url(https://images.unsplash.com/photo-1506305269769-53a5714a93be?ixlib=rb-1.2.1&auto=format&fit=crop&w=645&q=80);
  background-size: cover;
  background-position: center;
  color: white;
  text-align: center;
}

h1 {
  margin: 0;
  padding: 34px 15px 12px;
  font-weight: 300;
  font-size: 60px;
}

p {
  margin: 0;
  padding: 0 24px;
  font-size: 16px;
  width: 360px;
  opacity: 0.8;
  margin: 0 auto;
} */

form {
  display: flex;
  flex-direction: column;
  margin: 8px auto;
  width: 88%;
}

h4 {
  color: #666;
  margin: 16px 0 6px;
  font-size: 16px;
  letter-spacing: 1px;

}

.isian {
  border: solid 1px #cbcbcb;
  border-radius: 6px;
  width: 97%;
  padding: 6px 12px;
  outline: none;
  margin: 4px auto;
}

input {
    align-items: center;
  height: 28px;
}

textarea {
  height: 62px;
}

.subbtn {
  height: 42px;
  width: 60%;
  margin: 24px auto;
  border-radius: 6px;
  border: none;
  color: white;
  background: linear-gradient(to left bottom, #000046, #5B86E5);
  cursor: pointer;
}
</style>
<div class="gulugulu">
    <div class="gigachad">
        <div class="headerbola">
          <h1>Contact us</h1>
          <p>Do you have a question? Send us a message and we will respond as soon as possible.</p>
        <div class="isian">
            <form>
                {{-- ini bisa aja otomatis lngsng ke login, tpi karna kyknya gabutuh jdi gw bikin dummy aja  --}}
                <h4>Name</h4>
                <input type="text" name="name">
                <h4>Email</h4>
                <input type="text" name="email">
                <h4>Message</h4>
                <textarea></textarea>
                <button class="subbtn" style="align-items: center">Send</button>
            </form>
      </div>
</div>

@endsection
