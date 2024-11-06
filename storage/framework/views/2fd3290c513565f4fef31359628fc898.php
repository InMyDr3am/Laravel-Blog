<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <article class="py-8 max-w-screen-md border-b-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold texxt-gray-900">Artikel 1</h2>
        <div class="text-base text-gray-500">
            <a href="#"> Fauzi ramdhani</a> | 1 januari 2024
        </div>
        <p class="my-4 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?
        </p>
        <a href="#" class="font-medium text-blue-500 hover:underline" >Read More .. &raquo;</a>
    </article>
    <article class="py-8 max-w-screen-md border-b-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold texxt-gray-900">Artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#"> Fauzi ramdhani</a> | 1 januari 2024
        </div>
        <p class="my-4 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Iusto et nobis soluta provident autem repellendus nemo, 
            nesciunt delectus veritatis reprehenderit minima maxime 
            impedit dolorum rerum ipsam repellat assumenda. 
            Recusandae, architecto?
        </p>
        <a href="#" class="font-medium text-blue-500 hover:underline" >Read More .. &raquo;</a>
    </article>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH E:\laragon\www\projectpertama\resources\views/blog.blade.php ENDPATH**/ ?>