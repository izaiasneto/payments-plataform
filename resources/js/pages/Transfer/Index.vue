<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Transfer',
        href: '/transfer',
    },
];
</script>

<template>
    <Head title="Transfer" />

    <AppLayout :breadcrumbs="breadcrumbs">
        
    </AppLayout>
</template>
