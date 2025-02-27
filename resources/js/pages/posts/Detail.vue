<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import RightSideBar from '../RightSideBar.vue';
defineOptions({ layout: AppLayout });
</script>
<template>
  <div class="c6969 c9xin cr8w3 ci4j9 cr7br clwia cpqam c94qd c4a0m">
    <!-- Middle area -->
    <div class="c4a0m">
      <div class="c8b8k">
        <!-- Back -->
        <div class="cec5b">
          <a class="cg3vi cj965 cry3b c81t6 cax03 c3iz2 chugl cz5kb c90wr" href="index.html">
            <span class="c4g5b">Back</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34">
              <path
                class="cjnrq"
                d="m16.414 17 3.293 3.293-1.414 1.414L13.586 17l4.707-4.707 1.414 1.414z"
              ></path>
            </svg>
          </a>
        </div>

        <article>
          <!-- Post header -->
          <header>
            <div class="cpk71 c5a0p c0kco cfwvb">
              <!-- Post date -->
              <div class="c2bb0 cd99g ck5r6">
                <span class="chugl">—</span>
                Dec 24, 2023
                <span class="cxuy4 crnoq">·</span>
                4 Min read
              </div>
              <!-- Share buttons -->
              <ul class="cz5kb">
                <li>
                  <a
                    class="cqs8k cpvt7 chlgd cfup8 crnoq c5a0p cofma chtu4 coi2g cfwvb"
                    href="#0"
                    aria-label="Twitter"
                  >
                    <svg
                      class="cjnrq csb9v c2298"
                      viewBox="0 0 32 32"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m13.063 9 3.495 4.475L20.601 9h2.454l-5.359 5.931L24 23h-4.938l-3.866-4.893L10.771 23H8.316l5.735-6.342L8 9h5.063Zm-.74 1.347h-1.457l8.875 11.232h1.36l-8.778-11.232Z"
                      ></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    class="cqs8k cpvt7 chlgd cfup8 crnoq c5a0p cofma chtu4 coi2g cfwvb"
                    href="#0"
                    aria-label="Facebook"
                  >
                    <svg
                      class="cjnrq csb9v c2298"
                      viewBox="0 0 32 32"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M14.023 24 14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257Z"
                      ></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    class="cqs8k cpvt7 chlgd cfup8 crnoq c5a0p cofma chtu4 coi2g cfwvb"
                    href="#0"
                    aria-label="Share"
                  >
                    <svg
                      class="cjnrq csb9v c2298"
                      viewBox="0 0 32 32"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M20 14c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3c0 .223.029.439.075.649l-3.22 2.012A2.97 2.97 0 0 0 12 13c-1.654 0-3 1.346-3 3s1.346 3 3 3a2.97 2.97 0 0 0 1.855-.661l3.22 2.012c-.046.21-.075.426-.075.649 0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3a2.97 2.97 0 0 0-1.855.661l-3.22-2.012c.046-.21.075-.426.075-.649 0-.223-.029-.439-.075-.649l3.22-2.012A2.97 2.97 0 0 0 20 14Z"
                      ></path>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <h1 class="cpynq cjd5a ciz93">How to Control CSS Animations with JavaScript</h1>
          </header>
          <!-- Post content -->
          <div class="cxslc c2bb0 cr8w3">
            <p>
              When it comes to animations on the web, developers need to measure the animation's
              requirements with the right technology -- CSS or JavaScript.
            </p>
            <img
              class="c8pgj"
              src="https://preview.cruip.com/devspace/images/post-image.jpg"
              width="692"
              height="390"
              alt="Post"
            />
            <div class="c9gi4">
              <p>
                Web designers sometimes believe that animating in CSS is more difficult than
                animating in JavaScript.
                <strong class="cxmc9 cg0ht cnp10">
                  While CSS animation does have some limitations
                </strong>
                , most of the time it's more capable than we give it credit for! Not to mention,
                typically more performant.
              </p>
              <p>
                Coupled with a touch of JavaScript, CSS animations and transitions are able to
                accomplish hardware-accelerated animations and interactions more efficiently than
                most JavaScript libraries. Let's jump straight in!
              </p>
              <p>Let's jump straight in!</p>
            </div>
            <div class="c9gi4">
              <h2 class="cxmc9 cg0ht cpynq crvmr">Manipulating CSS Transitions</h2>
              <p>
                There are countless questions on coding forums related to triggering and pausing an
                element's transition. The solution is actually quite simple using JavaScript.
              </p>
              <p>
                To trigger an element's transition, toggle a class name on that element that
                triggers it.
              </p>
              <p>
                To pause an element's transition, use getComputedStyle and getPropertyValue at the
                point in the transition you want to pause it.
                <a class="cm6cq chugl cnp10" href="#0">Then set those CSS properties</a>
                of that element equal to those values you just got.
              </p>
            </div>
            <div class="c9gi4">
              <h2 class="cxmc9 cg0ht cpynq crvmr">Using CSS “Callback Functions”</h2>
              <p>
                Some of the most useful yet little-known JavaScript tricks for manipulating CSS
                transitions and animations are the DOM events they fire. Like:
                <strong class="cxmc9 cg0ht cnp10">
                  animationend, animationstart, and animationiteration for animations
                </strong>
                and transitionend for transitions. You might guess what they do. These animation
                events fire when the animation on an element ends, starts, or completes one
                iteration, respectively.
              </p>
              <p>
                These events need to be vendor prefixed at this time, so in this demo, we use a
                function developed by Craig Buckler called PrefixedEvent, which has the parameters
                element, type, and callback to help make these events cross-browser. Here is his
                useful article on capturing CSS animations with JavaScript. And
                <a class="cm6cq chugl cnp10" href="#0">here is another one</a>
                determining which animation (name) the event is firing for.
              </p>
            </div>
            <div class="c9gi4">
              <h2 class="cxmc9 cg0ht cpynq crvmr">Manipulating CSS Transitions</h2>
              <p>
                Like we just learned, we can watch elements and react to animation-related events:
                animationStart, animationIteration, and animationEnd. But what happens if you want
                to change the CSS animation mid-animation? This requires a bit of trickery!
              </p>
            </div>
            <div class="c9gi4">
              <h3 class="cxmc9 cg0ht cpynq cjvvo">The animation-play-state Property</h3>
              <p>
                The animation-play-state property of CSS is incredibly helpful when you simply need
                to pause an animation and potentially continue it later. You can change that CSS
                through JavaScript like this (mind your prefixes):
              </p>
            </div>
            <pre
              class="cgr7g c2bb0 ca9r6 cx6ng c9xwx cme8e cmy5q"
            ><code class="c4j9y"><span class="ct35c">element</span>.<span class="ct35c">style</span>.<span class="ct35c">webkitAnimationPlayState</span> <span class="cb1xz">=</span> <span class="cd909">"paused"</span>;

<span class="ct35c">element</span>.<span class="ct35c">style</span>.<span class="ct35c">webkitAnimationPlayState</span> <span class="cb1xz">=</span> <span class="cd909">"running"</span>;</code>
</pre>
            <div class="c9gi4">
              <h3 class="cxmc9 cg0ht cpynq cjvvo">Obtaining the Current Keyvalue Percentage</h3>
              <p>
                Unfortunately, at this time, there is no way to get the exact current “percentage
                completed” of a CSS keyframe animation.
                <strong class="cxmc9 cg0ht cnp10">
                  The best method to approximate it is using a setInterval function
                </strong>
                that iterates 100 times during the animation, which is essentially: the animation
                duration in ms / 100. For example, if the animation is 4 seconds long, then the
                setInterval needs to run every 40 milliseconds (4000/100).
              </p>
            </div>
            <pre
              class="cgr7g c2bb0 ca9r6 cx6ng c9xwx cme8e cmy5q"
            ><code class="c4j9y"><span class="ct35c">var showPercent</span> <span class="cb1xz">=</span> <span class="ct35c">window</span>.<span class="ct35c">setInterval</span>(<span class="cd909">function</span>() {

<span class="cd909">if</span> (<span class="ct35c">currentPercent</span> <span class="cb1xz">&lt;</span> <span class="cuwxp">100</span>) {

<span class="ct35c">currentPercent</span> <span class="cb1xz">+=</span> <span class="cuwxp">1</span>;

} <span class="cd909">else</span> {

<span class="ct35c">currentPercent</span> <span class="cb1xz">=</span> <span class="cuwxp">0</span>;

}

// Updates a div that displays the current percent

<span class="ct35c">result</span>.<span class="ct35c">innerHTML</span> <span class="cb1xz">=</span> <span class="ct35c">currentPercent</span>;

}, <span class="cb1xz">40</span>);</code>
</pre>
            <div class="c9gi4">
              <h2 class="cxmc9 cg0ht cpynq crvmr">Use Your Head</h2>
              <p>
                Before starting to code, thinking about and planning how a transition or animation
                should run is the best way to minimize your problems and get the effect you desire.
                Even better than Googling for solutions later! The techniques and tricks overviewed
                in this article may not always be the best way to create the animation your project
                calls for.
              </p>
              <p>
                Here's a little example of
                <strong class="cxmc9 cg0ht cnp10">where getting clever with HTML and CSS</strong>
                alone can solve a problem where you might have thought to go to JavaScript.
              </p>
            </div>
            <div class="c9gi4">
              <h2 class="cxmc9 cg0ht cpynq crvmr">In Conclusion</h2>
              <ul class="c2czg c0c3z csndo">
                <li>Developers used to need to choose between CSS and JavaScript.</li>
                <li>
                  In JavaScript, CSS transitions are generally easier to work with than CSS
                  animations.
                </li>
                <li>CSS Matrices are generally a pain to deal with, especially for beginners.</li>
                <li>Thinking about what should be done and planning how to do it.</li>
              </ul>
            </div>
          </div>
        </article>
      </div>
    </div>

    <!-- Right sidebar -->
    <RightSideBar />
  </div>
</template>
