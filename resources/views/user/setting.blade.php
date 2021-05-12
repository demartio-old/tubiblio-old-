@extends('welcome.menu')
@section('activePersonal')
    class="active"
@stop
@section('content')
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>SETTINGS</h2>
                    {{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
                </div>

                {{--        <div>--}}
                {{--          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>--}}
                {{--        </div>--}}

                <div class="row mt-5">

                    {{--          <div class="col-lg-4">--}}
                    {{--            <div class="info">--}}
                    {{--              <div class="address">--}}
                    {{--                <i class="icofont-google-map"></i>--}}
                    {{--                <h4>Location:</h4>--}}
                    {{--                <p>A108 Adam Street, New York, NY 535022</p>--}}
                    {{--              </div>--}}

                    {{--              <div class="email">--}}
                    {{--                <i class="icofont-envelope"></i>--}}
                    {{--                <h4>Email:</h4>--}}
                    {{--                <p>info@example.com</p>--}}
                    {{--              </div>--}}

                    {{--              <div class="phone">--}}
                    {{--                <i class="icofont-phone"></i>--}}
                    {{--                <h4>Call:</h4>--}}
                    {{--                <p>+1 5589 55488 55s</p>--}}
                    {{--              </div>--}}

                    {{--            </div>--}}

                    {{--          </div>--}}

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="/books" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>
                                        <div class="form-row">
                                            <div class="col-md-6 form-group">
                                                <label for="title">Email Address: </label>
                                                <input type="text" name="title" class="form-control" id="title" placeholder="Email" data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres" />
                                                <div class="validate"></div>
                                            </div>
                                            {{--                <div class="col-md-6 form-group">--}}
                                            {{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
                                            {{--                  <div class="validate"></div>--}}
                                            {{--                </div>--}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center"><button type="submit">UDPDATE EMAIL</button></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-row">
                                            <div class="col-md-6 form-group">
                                                <label for="title">New password: </label>
                                                <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Nuevo password" data-rule="minlen:4" data-msg="Introduce el isbn del libro" />
                                                <div class="validate"></div>
                                            </div>
                                            {{--                <div class="col-md-6 form-group">--}}
                                            {{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
                                            {{--                  <div class="validate"></div>--}}
                                            {{--                </div>--}}
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-row">
                                            <div class="col-md-6 form-group">
                                                <label for="title">Confirm new password: </label>
                                                <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Confirmar nuevo password" data-rule="minlen:4" data-msg="Introduce el isbn del libro" />
                                                <div class="validate"></div>
                                            </div>
                                            {{--                <div class="col-md-6 form-group">--}}
                                            {{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
                                            {{--                  <div class="validate"></div>--}}
                                            {{--                </div>--}}
                                        </div>
                                    </td>
                                    <td>
                                        {{csrf_field()}}
                                        <div class="text-center"><button type="submit">UPDATE PASSWORD</button></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-center"><button type="submit">RESET PASSWORD</button></div>
                                    </td>
                                </tr>
                            </table>



{{--                            <div class="form-row">--}}
{{--                                <div class="col-md-6 form-group">--}}
{{--                                    <label for="author">Autor:   </label>--}}
{{--                                    <input type="text" name="author" class="form-control" id="author" placeholder="Autor" data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres" />--}}
{{--                                    <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                <div class="col-md-6 form-group">--}}
{{--                                --}}{{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
{{--                                --}}{{--                  <div class="validate"></div>--}}
{{--                                --}}{{--                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-row">--}}
{{--                                <div class="col-md-6 form-group">--}}
{{--                                    <label for="category">Elige un género:</label>--}}

{{--                                    <select id="category" class="form-control">--}}
{{--                                        <option value="adventure" selected>Aventura</option>--}}
{{--                                        <option value="science_fiction">Ciencia-ficción</option>--}}
{{--                                        <option value="comic">Comic</option>--}}
{{--                                        <option value="fairy_tail">Cuento</option>--}}
{{--                                        <option value="dystopic">Distópico</option>--}}
{{--                                        <option value="manga">Manga</option>--}}
{{--                                        <option value="detective">Policíaco</option>--}}
{{--                                        <option value="romantic">Romance</option>--}}
{{--                                        <option value="terror">Terror</option>--}}
{{--                                    </select>--}}
{{--                                    --}}{{--                  <label for="title">ISBN:   </label>--}}
{{--                                    --}}{{--                  <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Título del libro" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />--}}
{{--                                    --}}{{--                  <div class="validate"></div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                <div class="col-md-6 form-group">--}}
{{--                                --}}{{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
{{--                                --}}{{--                  <div class="validate"></div>--}}
{{--                                --}}{{--                </div>--}}
{{--                            </div>--}}
                            {{--              <div class="form-group">--}}
                            {{--                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />--}}
                            {{--                <div class="validate"></div>--}}
                            {{--              </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="review">Review:   </label>--}}
{{--                                <textarea class="form-control" name="review" id="review" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Review"></textarea>--}}
{{--                                <div class="validate"></div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="book_cover">Portada:   </label>--}}
{{--                                <input name="book_cover" id="book_cover" type="file">--}}
{{--                            </div>--}}
                            {{--              <div class="mb-3">--}}
                            {{--                <div class="loading">Loading</div>--}}
                            {{--                <div class="error-message"></div>--}}
                            {{--                <div class="sent-message">Your message has been sent. Thank you!</div>--}}
                            {{--              </div>--}}
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@stop
