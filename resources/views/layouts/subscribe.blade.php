
<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLongoExemplo">
    Abrir modal de demonstração
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header logo">
            <img src="img/logo/diamond/2.png" style="width:20rem;margin-left:5rem;" alt="image">
          </div>
        <div class="modal-body">
            <div class="container my-4">

                <p class="font-weight-bold" style="margin-top: -1rem;text-align:center">Already have an account?</p>

                <p style="margin-bottom: 1rem;text-align:center">Registration Form</p>

                 <section id="register-form">
                      <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12 mb-1">
                          <section>
                            <form class="">

                                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Fullname">


                              <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">


                              <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                              <br>
                              <p style="font-size: 12px">Use 8 or more characters including a lowercase character, an uppercase character and a number</p>

                              <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Confirm(Password)" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                              </small>
                              <input type="date" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">
                              <p>Genero</p>

                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Default radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Default checked radio
                                </label>
                              </div><br>
                              <input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder=" Codigo Postal">

                              <div class="row" style="margin-bottom: 0.5rem"></div>
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <p class="titulo">Top stories & features</p>
                                    <p style="font-size: 12px">Get the most from Diamond Review Africa with personalised special reports,
                                    recommended reads, the Daily newsletter and lat est feature announcements delivered to
                                    you by email.</p>
                                  </label>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: "></div>
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <p class="titulo">Invites and offers from Diamond Review Africa</p>
                                    <p  style="font-size: 12px">Receive exclusive personalised event invitations, carefully -curated offers and promotions
                                    from Diamond Review Africa by email.</p>
                                  </label>
                                </div>
                              </div>
                              <div class="row" style="margin-bottom: em"></div>
                              <p class=""style="font-size: 12px">We'll still send you service messages about your account, security and legal notifications.</p>

                              <div class="row" ></div>
                              <p style="font-size: 12px">By clicking on this button you confirm you have read and agree to
                                the Terms and Conditions, Privacy Policy and Cookie Policy.</p>

                          </section>
                        </div>
                      </div>
                    </form>
                    </section>

              </div>
             </div>
              <button class="btn btn-info my-4 btn-block waves-effect waves-light" style ="width: 30rem;padding:0.5rem;margin-left:2%"="submit">Created your count</button>

      </div>
    </div>
  </div>


<style>

    .logo{
        background-image: url("../../img/logo/banner.jpg");
        background-size: cover;
        height: 8rem;


    }
    .texto{
      margin-top: -0.5rem;
      font-size: 12px;
    }
    .titulo{
      color:black;
      font-weight: bold;
      font-size: 13px;

    }
</style>
