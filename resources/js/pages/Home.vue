<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import RightSideBar from './RightSideBar.vue';
import { reactive, ref } from 'vue';
defineOptions({ layout: AppLayout });

type Tab = 'coding' | 'startups' | 'tutorials' | 'indieHacking';
const activeTab = ref<Tab>('coding');
const show = ref<Boolean>(false);



</script>
<template>
  <div class="w-full">
    <!-- Hero -->
    <section>
      <div class="c8b8k">
        <div class="c2r2p c7sw6">
          <img
            class="c3iz2 cme53"
            src="https://preview.cruip.com/devspace/images/me.jpg"
            width="56"
            height="56"
            alt="Me"
          />
          <h1 class="cpynq cme53 ciz93">
            I write about coding and being a
            <span class="cfsb7 cofz6 cdaqi c3ntq csd7h c4ezg c8xm0 c6esp chugl cz5kb c5c77">
              full-time
            </span>
            maker.
          </h1>
          <p class="cxslc c2bb0 c5rvt">
            Writer, Speaker, Developer, and Co-Founder of Code.co, and AppForYou. I write about
            coding, startups, and my journey as a full-time maker.
          </p>
        </div>
      </div>
    </section>

    <!-- Content -->
    <div class="c6969 c9xin cr8w3 ci4j9 clwia cpqam c4a0m">
      <!-- Middle area -->
      <div class="c4a0m">
        <div class="c8b8k">
          <div class="c7qcc">
            <!-- Latest Articles -->
            <section>
              <h2 class="cpynq c670g c8dzi cec5b">Latest Articles</h2>

              <!-- Filters -->
              <ul class="cg3vi crdpf cnxqt c8z7y cme8e cfwvb">
                <li class="cz4pw c59mu" @click="activeTab = 'coding'">
                  <a class="cg0ht cnp10 cxslc chipd cen0e" href="#0" :class="{'ch63g cgygf cxmc9': activeTab === 'coding'}">Coding</a>
                </li>
                <li class="cz4pw c59mu" @click="activeTab = 'startups'">
                  <a class="cg0ht cts6h cb9ru cxslc c2bb0 chipd cen0e" href="#0" :class="{'ch63g cgygf cxmc9': activeTab === 'startups'}">Startups</a>
                </li>
                <li class="cz4pw c59mu" @click="activeTab = 'tutorials'">
                  <a class="cg0ht cts6h cb9ru cxslc c2bb0 chipd cen0e" href="#0" :class="{'ch63g cgygf': activeTab === 'tutorials'}">Tutorials</a>
                </li>
                <li class="cz4pw c59mu" @click="activeTab = 'indieHacking'">
                  <a class="cg0ht cts6h cb9ru cxslc c2bb0 chipd cen0e" href="#0" :class="{'ch63g cgygf': activeTab === 'indieHacking'}">Indie Hacking</a>
                </li>
              </ul>

              <div class="relative">
                <transition>
                  <div :key="activeTab" class="tab-content">
                    <div v-if="activeTab === 'coding'">
                      <!-- Coding content here -->
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src="https://preview.cruip.com/devspace/images/post-thumb-02.jpg"
                              width="88"
                              height="88"
                              alt="Post 01"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  An Interactive Guide to Flexbox
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src="https://preview.cruip.com/devspace/images/post-thumb-03.jpg"
                              width="88"
                              height="88"
                              alt="Post 02"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  Fuzzy Logic in a Hurry
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                    </div>
                    <div v-if="activeTab === 'startups'">
                      <!-- Startups content here -->
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src="https://preview.cruip.com/devspace/images/post-thumb-04.jpg"
                              width="88"
                              height="88"
                              alt="Post 03"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  Machine Learning for Humans
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src="https://preview.cruip.com/devspace/images/post-thumb-05.jpg"
                              width="88"
                              height="88"
                              alt="Post 04"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  Writing My First Security Blogpost
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                    </div>
                    <div v-if="activeTab === 'tutorials'">
                      <!-- Tutorials content here -->
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src=""
                              width="88"
                              height="88"
                              alt="Post 05"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  10 YouTube Channels That Will Make You Smarter
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                      <Link :href="route('posts.detail')">
                        <article class="cg3vi crdpf c8z7y c3bdg">
                          <div class="c9noy cfwvb">
                            <img
                              class="c906c cr6xl c8c2x c9xwx ccj8i co6sp c5zj3"
                              src=""
                              width="88"
                              height="88"
                              alt="Post 06"
                            />
                            <div>
                              <div class="c2bb0 cd99g ck5r6 c0kco">
                                <span class="chugl">—</span>
                                Dec 24, 2023
                              </div>
                              <h3 class="cpynq c670g c5rvt c0kco">
                                <a
                                  class="cfsb7 c2ers cofz6 cubqj cq25t cegle chlgd cdaqi c3ntq csd7h cdie3 c4ezg c8xm0 c6esp cofma cz5kb c5c77 cn2yf"
                                  href="#"
                                >
                                  How to Control CSS Animations with JavaScript
                                </a>
                              </h3>
                              <div class="cfwvb">
                                <div class="cxslc c2bb0 cme8e c4a0m">
                                  Flexbox is a remarkably flexible layout mode. When we understand
                                  how it works, we can build responsive designs that rearrange
                                  themselves as needed.
                                </div>
                                <a
                                  class="cfup8 c5a0p chugl csb3e c86uy cw2lf cpnf3 cgej2"
                                  href="#"
                                  tabindex="-1"
                                >
                                  <svg
                                    class="cqlhq cjnrq cofma chtu4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="14"
                                    height="12"
                                  >
                                    <path
                                      d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </article>
                      </Link>
                    </div>
                    <div v-if="activeTab === 'indieHacking'"></div>
                  </div>
                </transition>
              </div>
            </section>

            <!-- Popular Talks -->
            <section>
              <h2 class="cpynq c670g c8dzi cme53">Popular Talks</h2>

              <!-- Cards -->
              <div class="c2bf0 cuyx0 ci65n cgdgh ceazt">
                <a
                  class="ck1rl cegol cth4i c08dn c1gvt c6iwv c9ic7 czh94 crprk cpa9f c9alu chtu4 czz51 cjci4 c5c77"
                  href="#0"
                >
                  <img
                    class="c8c2x c8bmc chzqd c5u91 cglmn c8pgj"
                    src="https://preview.cruip.com/devspace/images/popular-post-02.jpg"
                    width="336"
                    height="189"
                    alt="Popular post 01"
                  />
                  <div class="cpk71 cf0v5 c736y c9noy c5c77 c0bc4 cglmn cfwvb c5oxi">
                    <div class="c5a0p cpynq c670g craoz c5rvt cew4t cfwvb">
                      The Third Age of JavaScript
                    </div>
                    <div class="creo2 cldiu c8pgj cew4t cfwvb">
                      <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41">
                        <circle class="crdeu" cx="20" cy="20" r="20" fill-opacity=".88"></circle>
                        <path
                          class="c22wf"
                          d="m24.765 19.5-6.263-4.375a.626.626 0 0 0-1.002.5v8.75c0 .5.564.812 1.002.5l6.263-4.375a.65.65 0 0 0 0-1Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </a>
                <a
                  class="ck1rl cegol cth4i c08dn c1gvt c6iwv c9ic7 czh94 crprk cpa9f c9alu chtu4 czz51 cjci4 c5c77"
                  href="#0"
                >
                  <img
                    class="c8c2x c8bmc chzqd c5u91 cglmn c8pgj"
                    src="https://preview.cruip.com/devspace/images/popular-post-01.jpg"
                    width="336"
                    height="189"
                    alt="Popular post 02"
                  />
                  <div class="cpk71 cf0v5 c736y c9noy c5c77 c0bc4 cglmn cfwvb c5oxi">
                    <div class="c5a0p cpynq c670g craoz c5rvt cew4t cfwvb">
                      Building in Public Strategy
                    </div>
                    <div class="creo2 cldiu c8pgj cew4t cfwvb">
                      <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41">
                        <circle class="crdeu" cx="20" cy="20" r="20" fill-opacity=".88"></circle>
                        <path
                          class="c22wf"
                          d="m24.765 19.5-6.263-4.375a.626.626 0 0 0-1.002.5v8.75c0 .5.564.812 1.002.5l6.263-4.375a.65.65 0 0 0 0-1Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </section>

            <!-- Open-Source Projects -->
            <section>
              <h2 class="cpynq c670g c8dzi cme53">Open-Source Projects</h2>

              <!-- Cards -->
              <div class="c2bf0 cuyx0 ci65n cgdgh ceazt">
                <a
                  class="cg3vi cj965 cry3b ck1rl c81t6 cegol cax03 c6iwv cof6c c9o2h c9alu chtu4 czz51 c90wr c5oxi"
                  href="#0"
                >
                  <div class="c0bc4 cglmn cfwvb">
                    <div class="c4a0m">
                      <div class="ce7gc cax03 cfup8 c5a0p c3iz2 c90wr c4udf cfwvb c924u cvlm4">
                        <img
                          src="https://preview.cruip.com/devspace/images/project-icon-01.svg"
                          width="18"
                          height="18"
                          alt="Project 01"
                        />
                      </div>
                      <div class="cpynq c670g c5rvt c0kco">Awesome Container Tinkering</div>
                      <p class="cxslc c2bb0 cme8e c4udf">
                        Solutions for running containers locally and remotely.
                      </p>
                    </div>
                    <div class="chugl creo2 cfwvb">
                      <svg class="cjnrq" xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                        <path
                          d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </a>
                <a
                  class="cg3vi cj965 cry3b ck1rl c81t6 cegol cax03 c6iwv cof6c c9o2h c9alu chtu4 czz51 c90wr c5oxi"
                  href="#0"
                >
                  <div class="c0bc4 cglmn cfwvb">
                    <div class="c4a0m">
                      <div class="ce7gc cax03 cfup8 c5a0p c3iz2 c90wr c4udf cfwvb c924u cvlm4">
                        <img
                          src="https://preview.cruip.com/devspace/images/project-icon-02.svg"
                          width="18"
                          height="18"
                          alt="Project 02"
                        />
                      </div>
                      <div class="cpynq c670g c5rvt c0kco">Engine Prototypes</div>
                      <p class="cxslc c2bb0 cme8e c4udf">
                        Solutions for running containers locally and remotely.
                      </p>
                    </div>
                    <div class="chugl creo2 cfwvb">
                      <svg class="cjnrq" xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                        <path
                          d="M9.586 5 6.293 1.707 7.707.293 13.414 6l-5.707 5.707-1.414-1.414L9.586 7H0V5h9.586Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </section>
          </div>
        </div>
      </div>

      <!-- Right sidebar -->
      <RightSideBar />
    </div>
  </div>
</template>
<style lang="scss">
.v-enter-active,
.v-leave-active {
  transition: opacity 0.3s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>
