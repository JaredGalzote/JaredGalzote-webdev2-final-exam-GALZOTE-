@extends('layouts.app')
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Request Form</h2>
                    <form action="/bible-study-create-form" method="POST">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="hidden" name="id" id="id" />
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text"  name="name" id="name" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <label for="number"><i class="zmdi zmdi-phone"></i></label>
                            <input type="tel" name="number" id="number" placeholder="Contact Number"  />
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <p>Birth Date</p>
                        </div>
                        <div class="form-group">
                            <label for="bdate"><i class="zmdi zmdi-calendar"></i></label>
                            <input type="date" name="bdate" id="bdate"  placeholder="Your Birthdate"  />
                        </div>
                        <div class="form-group">
                            <label for="relaff"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="relaff"  id="relaff" placeholder="Religious Affiliation" />
                        </div>
                        <div class="form-group">
                            <p>Schedule Date</p>
                        </div>
                        <div class="form-group">
                            <label for="bsdate"><i class="zmdi zmdi-calendar"></i></label>
                            <input type="date" name="bsdate"  id="bsdate"placeholder="Schedule" />
                        </div>
                        <div class="form-group">
                            <label for="bstime"><i class="zmdi zmdi-time"></i></label>
                            <input type="time" name="bstime"  id="bstime" placeholder="ex.7:00" />
                        </div>
                        <div class="form-group">
                            <label for="bslocation"><i class="zmdi zmdi-navigation"></i></label>
                            <input type="text" name="bslocation" id="bslocation"  placeholder="Your Location/Address" />
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" class="form-submit" value="Submit Request" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure>
                        <div id="ourmanna-verse">Loading...</div>
                    </figure>
                    <figure><img src="/images/bs.jpg" alt="BS image"></figure>
                    <a href="/bible-study-requests" class="signup-image-link">Table Requests</a>
                </div>
            </div>
        </div>
    </section>