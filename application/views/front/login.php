<style type="text/css">
html, body {
  position: relative;
  min-height: 100vh;
  background-color: #E1E8EE;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.form-structor {
  background-color: #222;
  border-radius: 15px;
  height: 550px;
  width: 350px;
  position: relative;
  overflow: hidden;
}
.form-structor::after {
  content: '';
  opacity: .8;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-repeat: no-repeat;
  background-position: left bottom;
  background-size: cover;
  background-image: url("http://www.timorleste.tl/wp-content/uploads/cristo-rey-1.jpg");
}
.form-structor .masuk {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 70%;
  z-index: 5;
  -webkit-transition: all .3s ease;
}
.form-structor .masuk.slide-up {
  top: 5%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all .3s ease;
}
.form-structor .masuk.slide-up .form-holder, .form-structor .masuk.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
}
.form-structor .masuk.slide-up .form-title {
  font-size: 1em;
  cursor: pointer;
}
.form-structor .masuk.slide-up .form-title span {
  margin-right: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.form-structor .masuk .form-title {
  color: #fff;
  font-size: 1.7em;
  text-align: center;
}
.form-structor .masuk .form-title span {
  color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}
.form-structor .masuk .form-holder {
  border-radius: 15px;
  background-color: #fff;
  overflow: hidden;
  margin-top: 50px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.form-structor .masuk .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 40px;
  line-height: 30px;
  padding: 8px 15px;
  border-bottom: 1px solid #eee;
  width: 100%;
  font-size: 12px;
}
.form-structor .masuk .form-holder .input:last-child {
  border-bottom: 0;
}
.form-structor .masuk .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}
.form-structor .masuk .submit-btn {
  background-color: rgba(0, 0, 0, 0.4);
  color: rgba(255, 255, 255, 0.7);
  border: 0;
  border-radius: 15px;
  display: block;
  margin: 15px auto;
  padding: 15px 45px;
  width: 100%;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.form-structor .masuk .submit-btn:hover {
  transition: all .3s ease;
  background-color: rgba(0, 0, 0, 0.8);
}
.form-structor .lupa {
  position: absolute;
  top: 20%;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 5;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa::before {
  content: '';
  position: absolute;
  left: 50%;
  top: -20px;
  -webkit-transform: translate(-50%, 0);
  background-color: #fff;
  width: 200%;
  height: 250px;
  border-radius: 50%;
  z-index: 4;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa .center {
  position: absolute;
  top: calc(50% - 10%);
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 65%;
  z-index: 5;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa .center .form-title {
  color: #000;
  font-size: 1.7em;
  text-align: center;
}
.form-structor .lupa .center .form-title span {
  color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa .center .form-holder {
  border-radius: 15px;
  background-color: #fff;
  border: 1px solid #eee;
  overflow: hidden;
  margin-top: 50px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa .center .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 40px;
  line-height: 30px;
  padding: 8px 15px;
  border-bottom: 1px solid #eee;
  width: 100%;
  font-size: 12px;
}
.form-structor .lupa .center .form-holder .input:last-child {
  border-bottom: 0;
}
.form-structor .lupa .center .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}
.form-structor .lupa .center .submit-btn {
  background-color: #6B92A4;
  color: rgba(255, 255, 255, 0.7);
  border: 0;
  border-radius: 15px;
  display: block;
  margin: 15px auto;
  padding: 15px 45px;
  width: 100%;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa .center .submit-btn:hover {
  transition: all .3s ease;
  background-color: rgba(0, 0, 0, 0.8);
}
.form-structor .lupa.slide-up {
  top: 90%;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa.slide-up .center {
  top: 10%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all .3s ease;
}
.form-structor .lupa.slide-up .form-holder, .form-structor .lupa.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .3s ease;
}
.form-structor .lupa.slide-up .form-title {
  font-size: 1em;
  margin: 0;
  padding: 0;
  cursor: pointer;
}
.bahasa{
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 20px 20px 0 0;
}
</style>
<div class="form-structor">
        <div class="bahasa">
          <img src="https://vector.me/files/images/1/8/181348/flag_of_indonesia_clip_art.jpg" height="30px" width="30px" style="border-radius: 50%;" class="img img-circle">
          <img src="http://www.unilab.edu.br/wp-content/uploads/2014/09/destaque-timor-leste.jpg" height="30px" width="30px" style="border-radius: 50%;" class="img img-circle">
          <img src="http://4.bp.blogspot.com/-TW5OkgCn5X4/UNF2HUtgB2I/AAAAAAAAG_Y/MzRZEyAui0o/s1600/gambar+bendera+inggris+9.jpg" height="30px" width="30px" style="border-radius: 50%;" class="img img-circle">
        </div>
    <div class="masuk">
        <!-- <img src=""> -->
        <img src="http://bonita.telkomcel.tl/assets/images/logo.png">
        <h2 class="form-title" id="masuk" style="text-transform: uppercase;">pulsa digital</h2>
        <form class="login" action="<?=site_url('welcome/proses_log')?>" method="post">
            <div class="form-holder">
                <input type="text" name="username" class="input" placeholder="Nomor Telepon" />
                <input type="password" name="password" class="input" placeholder="Kata Sandi" />
            </div>
            <button class="submit-btn" type="submit">Masuk</button>
        </form>
    </div>
    <div class="lupa slide-up">
        <div class="center">
            <h2 class="form-title" id="lupa">Lupa Password?</h2>
            <div class="form-holder">
                <input type="email" class="input" placeholder="Masukan Nomor" />
            </div>
            <button class="submit-btn">Kirim</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    console.clear();

    const lupaBtn = document.getElementById('lupa');
    const masukBtn = document.getElementById('masuk');

    lupaBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up');
                $(".bahasa").fadeOut();
            }else{
                masukBtn.parentNode.classList.add('slide-up');
                parent.classList.remove('slide-up');
                // $(".bahasa").fadeIn();
            }
        });
    });

    masukBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if(element !== "slide-up") {
                parent.classList.add('slide-up')
            }else{
                lupaBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });
</script>