<template>

      <section id="default-breadcrumb">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">

        <div class="card-body">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
             <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
                <li class="breadcrumb-item" v-if="back_url"><router-link :to="back_url" >{{back_name}}</router-link></li>
                <li class="breadcrumb-item active" aria-current="page">{{current_name}}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
</template>

<script>
export default {
props:['home','current_name','back_url','back_name']
}
</script>

<style>

</style>
