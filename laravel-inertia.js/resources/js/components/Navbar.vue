<template>
    <nav>
        <ul>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/about">About</Link>
            </li>
            <li>
                <Link href="/contact">Contact</Link>
            </li>
            <li>
                <Link as="button" href="/logout" method="post">Log out</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Navbar"
}
</script>

<style scoped>

</style>
