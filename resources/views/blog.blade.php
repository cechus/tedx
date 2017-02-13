@extends('layouts.app')

@section('content')
  <!-- Blog section -->
        <div class="section scrollspy" id="blog">
            <div class="container">
                <div class="row">
                    <h2>Latest blog posts</h2>
                    <div class="col s12 m10 offset-m1 l8 offset-l2">
                        <p class="flow-text center-align">
                            Want to get a little more personal? Read our stories, meet the team and get a preview of the future
                            products. All this and more in our blog.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wide-container">
                <div class="row masonry">
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/building.jpg" alt="Building">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">New office <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    After reaching 25 team members, we had to move to a bigger office and we've chosen
                                    this beautiful historic building in the middle of downtown area.
                                </p>
                                <p><a href="ajax/blog-posts/new-office.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l8">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/bottles.jpg" alt="Bottles">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Drink milk <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Throughout the world, there are more than six billion consumers of milk and milk products.
                                    Over 750 million people live within dairy farming households.
                                </p>
                                <p><a href="ajax/blog-posts/drink-milk.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/yoga.jpg" alt="Yoga">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Promoting yoga <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Various yogic groups had become prominent in Punjab in the 15th and 16th century,
                                    when Sikhism was in its nascent stage. The Guru Granth Sahib states:
                                </p>
                                <blockquote>
                                    O Yogi, Nanak tells nothing but the truth. You must discipline your mind.
                                    The devotee must meditate on the Word Divine. It is His grace which brings about the union.
                                    He understands, he also sees. Good deeds help one merge into Divination.
                                </blockquote>
                                <p><a href="ajax/blog-posts/promoting-yoga.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/coffee.jpg" alt="Coffee">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Coffee is your friend <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Coffee berries and their seeds undergo several processes before they become the familiar
                                    roasted coffee. Berries have been traditionally selectively picked by hand;
                                    a labor-intensive method, it involves the selection of only the berries at the peak of ripeness.
                                </p>
                                <p><a href="ajax/blog-posts/coffee.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/a4-paper-mockup.jpg" alt="A4 paper mockup">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">A4 paper mockup <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Our latest freebie release includes beautiful A4 paper mockup. You can use it to show
                                    off your stationary design efforts and other print stuff.
                                </p>
                                <p><a href="ajax/blog-posts/a4-paper-mockup.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/blog/drone.jpg" alt="Drone">
                            </div>
                            <a class="btn-floating btn-large waves-effect waves-dark green accent-2 activator">
                                <i class="mdi-navigation-expand-less indigo-text text-darken-4"></i>
                            </a>
                            <div class="card-reveal">
                                <span class="card-date grey-text">June 22<sup>nd</sup>, 2015</span>
                                <span class="card-title black-text">Droning around <i class="mdi-navigation-expand-more right"></i></span>
                                <p>
                                    Just taking our brand new custom-made drone for a spin. We're planning on using it to
                                    create awesome aerial footage and take wonderful photos from above.
                                </p>
                                <p><a href="ajax/blog-posts/droning-around.html" class="ajax-link">Read the full story</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="divider"></div>
        </div>
@endsection
