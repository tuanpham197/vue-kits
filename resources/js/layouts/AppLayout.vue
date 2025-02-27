<script setup lang="ts">
import type { BreadcrumbItemType } from '@/types';
import Nav from '@/pages/Nav.vue';
import Header from '@/pages/Header.vue';
import Footer from '@/pages/Footer.vue';
import { defineProps, withDefaults } from 'vue';

interface Props {
  breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
  breadcrumbs: () => [],
});
</script>

<template>
  <!-- Navigate -->
  <div class="cfbgr cpphc">
    <div class="ckb2r cfwvb">
      <!-- Side navigation -->
      <Nav></Nav>

      <!-- Main content -->
      <main class="c08dn c4a0m cajes">
        <div class="csbbd c0bc4 cpphc cglmn c8pgj cfwvb">
          <!-- Header -->
          <Header></Header>

          <slot></slot>
          <!-- Footer -->
          <Footer></Footer>
        </div>
      </main>
    </div>
  </div>
</template>
