<script>
  import { page } from "@inertiajs/inertia-svelte";

  $: ({ errors} = $page.props);

</script>

<slot />
