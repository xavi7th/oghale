<script>
  import { fade } from "svelte/transition";
</script>

<style lang="scss">
  *,
  ::after,
  ::before {
    box-sizing: border-box;
  }

  #page-loader {
    background: rgb(105, 151, 219);
    overflow: hidden;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 9999;
  }
  h4 {
    position: absolute;
    bottom: 34vh;
    left: 50%;
    margin: 0;
    font-weight: 200;
    opacity: 0.5;
    font-family: fantasy;
    color: #fff;
    transform: translateX(-50%);
    font-size: 25px;
  }

  #loader {
    /* Uncomment this to make it run! */

    /*      animation: loader 5s linear infinite;  */

    position: absolute;
    top: calc(50% - 20px);
    left: calc(50% - 20px);
  }

  #box {
    width: 70px;
    height: 70px;
    background: transparent;
    transform: rotate(0deg);
    animation: animate 3s linear infinite;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 3px;
    background-image: url(/img/logo.png);
    background-size: contain;
  }

  #shadow {
    width: 70px;
    height: 5px;
    background: #000;
    opacity: 0.1;
    position: absolute;
    top: 95px;
    left: 0;
    border-radius: 50%;
    animation: shadow 0.5s linear infinite;
  }
  @keyframes loader {
    0% {
      left: -100px;
    }
    100% {
      left: 110%;
    }
  }
  @keyframes animate {
    0% {
      transform: rotate(0deg);
    }
    25% {
      transform: translateY(9px);
    }
    50% {
      transform: translateY(18px) scale(1, 0.9);
    }
    75% {
      transform: translateY(9px);
    }
    100% {
      transform: translateY(0) rotate(360deg);
    }
  }
  @keyframes shadow {
    50% {
      transform: scale(1.2, 1);
    }
  }
</style>

<div id="page-loader" out:fade={{ duration: 600, delay: 400 }}>
  <div id="loader">
    <div id="shadow" />
    <div id="box" />
  </div>
  <h4>loading...</h4>
</div>
