<div id="MagicCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#MagicCarousel" data-slide-to="0"></li>
        <li class="active" data-target="#MagicCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#MagicCarousel" data-slide-to="2"></li>
        <li class="active" data-target="#MagicCarousel" data-slide-to="3"></li>
        <li class="active" data-target="#MagicCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/slider1.jpg') }}" alt="First Slide" />
            <div class="carousel-caption">
                <p>
                    Neosys College of healthcare Studies was established with the aim of providing applied 
                    education and training facilities for the students who want to work in healthcare sector locally 
                    and internationally. Though there are opportunities to teach and train in universities professional
                    and technical courses for graduates nevertheless very few institutions are giving proper training 
                    to the intermediate and  lower level healthcare workers. 
                    Come join with us and brighten your future.
                    {{-- Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Dolore ab dolorum sapiente voluptatem distinctio
                    iste provident eos odio dolores error aliquid nulla excepturi molestias harum est n
                    ecessitatibus, praesentium aperiam vitae. --}}
                </p>
                <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider2.jpg') }}" alt="Second Slide" />
            <div class="carousel-caption">
                <p>
                    Neosys College of healthcare Studies was established with the aim of providing applied 
                    education and training facilities for the students who want to work in healthcare sector locally 
                    and internationally. Though there are opportunities to teach and train in universities professional
                    and technical courses for graduates nevertheless very few institutions are giving proper training 
                    to the intermediate and  lower level healthcare workers. 
                    Come join with us and brighten your future.
                    {{-- Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Dolore ab dolorum sapiente voluptatem distinctio
                    iste provident eos odio dolores error aliquid nulla excepturi molestias harum est n
                    ecessitatibus, praesentium aperiam vitae. --}}
                </p>
                <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider3.jpg') }}" alt="Third Slide" />
            <div class="carousel-caption">
                <p>
                    Neosys College of healthcare Studies was established with the aim of providing applied 
                    education and training facilities for the students who want to work in healthcare sector locally 
                    and internationally. Though there are opportunities to teach and train in universities professional
                    and technical courses for graduates nevertheless very few institutions are giving proper training 
                    to the intermediate and  lower level healthcare workers. 
                    Come join with us and brighten your future.
                    {{-- Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Dolore ab dolorum sapiente voluptatem distinctio
                    iste provident eos odio dolores error aliquid nulla excepturi molestias harum est n
                    ecessitatibus, praesentium aperiam vitae. --}}
                </p>
                <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider4.jpg') }}" alt="Fourth Slide" />
            <div class="carousel-caption">
                <p>
                    Neosys College of healthcare Studies was established with the aim of providing applied 
                    education and training facilities for the students who want to work in healthcare sector locally 
                    and internationally. Though there are opportunities to teach and train in universities professional
                    and technical courses for graduates nevertheless very few institutions are giving proper training 
                    to the intermediate and  lower level healthcare workers. 
                    Come join with us and brighten your future.
                    {{-- Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Dolore ab dolorum sapiente voluptatem distinctio
                    iste provident eos odio dolores error aliquid nulla excepturi molestias harum est n
                    ecessitatibus, praesentium aperiam vitae. --}}
                </p>
                <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/slider5.jpg') }}" alt="Fifth Slide" />
            <div class="carousel-caption">
                <p>
                    Neosys College of healthcare Studies was established with the aim of providing applied 
                    education and training facilities for the students who want to work in healthcare sector locally 
                    and internationally. Though there are opportunities to teach and train in universities professional
                    and technical courses for graduates nevertheless very few institutions are giving proper training 
                    to the intermediate and  lower level healthcare workers. 
                    Come join with us and brighten your future.
                    {{-- Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Dolore ab dolorum sapiente voluptatem distinctio
                    iste provident eos odio dolores error aliquid nulla excepturi molestias harum est n
                    ecessitatibus, praesentium aperiam vitae. --}}
                </p>
                <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
            </div>
        </div>
        <a href="#MagicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#MagicCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="carousel-inner-content" id="home">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>Neosys College of Health care Studies</h2>
                    <p>
                        Neosys College of healthcare Studies was established with the aim of providing applied 
                        education and training facilities for the students who want to work in healthcare sector locally 
                        and internationally. Though there are opportunities to teach and train in universities professional
                        and technical courses for graduates nevertheless very few institutions are giving proper training 
                        to the intermediate and  lower level healthcare workers. 
                        Come join with us and brighten your future.
                    </p>
                    <a href="#courses" class="btn btn-outline-info">VIEW COURSES</a>
                </div>
                <div class="col-md-5">
                    <form action="" method="POST">
                        @csrf
                        <h3 class="text-center text-white">Ask A Question</h3>
                        <hr>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Your Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Field That You Are Interested</label>
                            <select name="field" id="" class="form-control" required>
                                <option value="" selected disabled>Interested In</option>
                                <option value="Geriatric Care Assistant">Geriatric Care Assistant</option>
                                <option value="Primary Healthcare assistant">Primary Healthcare assistant</option>
                                <option value="Dental care assistant">Dental care assistant</option>
                                <option value="Theatre assistant">Theatre assistant</option>
                                <option value="Physician and consultant assistant">Physician and consultant assistant</option>
                                <option value="Pharmacy assistant">Pharmacy assistant</option>
                                <option value="Lab assistant">Lab assistant</option>
                                <option value="Ward assistant">Ward assistant</option>
                                <option value="OPD assistant">OPD assistant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Your Message</label>
                            <input type="text" name="message" class="form-control" >
                            {{-- <textarea class="form-control" name="message" rows="3" placeholder="Your Message" required ></textarea> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary float-right " value="SEND MESSAGE" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>