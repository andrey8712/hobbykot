<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";
import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table'
import type {BreadcrumbItem} from "@/types";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
        <Table>
            <TableHeader>
                <TableRow>
                    <TableHead class="w-[100px]">
                        Invoice
                    </TableHead>
                    <TableHead>Status</TableHead>
                    <TableHead>Method</TableHead>
                    <TableHead class="text-right">
                        Amount
                    </TableHead>
                </TableRow>
            </TableHeader>
        </Table>
        </div>
    </AppLayout>
</template>
