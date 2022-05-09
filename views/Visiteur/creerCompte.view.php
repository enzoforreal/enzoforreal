<script src="public/JavaScript/captcha.js" charset="utf-8"></script>
<link href="<?= URL ?>public/CSS/captcha.css" rel="stylesheet" />
<main class="container-fluid bg-light" style="height: 100vh">
      <div class="container">
            <div class="d-flex flex-column align-items-center">

                  <div class="m-5">
                        <h1 class="text-center fw-bold">Sign up</h1>
                        <img class="mx-auto d-block mb-3" src="../../public/Assets/images/logo.svg" alt="Logo"
                              width="100px" style=" object-fit: cover ;  ">
                        <p class="text-center"></p>
                  </div>

                  <form id="form" method="POST" action="validation_creerCompte" class="d-flew flew-column"
                        style="width: 400px">
                        <div class="mb-3">
                              <label for="login">Lastname</label>
                              <input type="text" name="login" id="login" class="form-control"
                                    placeholder="Your lastname" require="required">
                        </div>

                        <div class="mb-3">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Your password" require="required">
                        </div>

                        <div class="mb-3">
                              <label for="mail">Email</label>
                              <input type="mail" name="mail" id="mail" class="form-control" placeholder="Your email"
                                    require="required">
                        </div>
                        <table class="captcha" width="225" border="0" cellspacing="0" cellpadding="0" height="225">
                              <tr>
                                    <td id="image1" name="image2" class="i6" onclick="clickImage('image1')"></td>
                                    <td id="image2" name="image3" class="i2" onclick="clickImage('image2')"></td>
                              </tr>
                              <tr>
                                    <td id="image3" name="image1" class="i5" onclick="clickImage('image3')"></td>
                                    <td id="image4" name="image4" class="i1" onclick="clickImage('image4')"></td>
                              </tr>
                        </table>
                        <div class="text-center">
                              <button disabled="True" id="button" type="submit"
                                    class="btn btn-success btn-sm  mt-4">Create an
                                    account</button>
                        </div>

                  </form>

            </div>
      </div>
</main>