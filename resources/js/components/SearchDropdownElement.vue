<template>
  <li class="list-group-item">
    <a class="dropdown-item" :href="'/profile/' + result.id">
      <div class="row">
        <div class="col-2 d-flex align-items-center">
          <img class="rounded-circle w-100" :src="result.image" alt="" />
        </div>
        <div class="col-10">
          <div>{{ result.title }}</div>
          <div>{{ result.posts }} Posts</div>
        </div>
      </div>
    </a>
  </li>
</template>

<script>
export default {
  props: {
    result: Object,
  },
};
</script>
