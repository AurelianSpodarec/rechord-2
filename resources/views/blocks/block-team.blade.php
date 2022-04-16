<x-section class="bg-black">
<x-container>


	<div class="text-center mb-32">
		<h2 class="text-3xl tracking-tight font-extrabold text-white sm:text-4xl mb-10">
			Meet the Team
		</h2>
		<p class="mt-3 max-w-2xl mx-auto text-sm text-white sm:mt-4">
			Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
		</p>
	</div>


	<ul class="space-y-12 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-20">
	<?php if ( have_rows( 'team_member' ) ) : ?>
	<?php while ( have_rows( 'team_member' ) ) : the_row(); ?>
		<li>
			<div class="space-y-4">
				<div class="aspect-w-3 aspect-h-2">

					<?php
						$avatar = get_sub_field( 'avatar' );
						if ( $avatar ) : ?>
						<img class="object-cover" src="<?php echo esc_url($avatar['url']); ?>" alt="<?php echo esc_attr($avatar['alt']); ?>" />
					<?php endif; ?>
					
				
				</div>
				<div class="leading-6 font-medium space-y-1">
					<?php if ( $name = get_sub_field( 'name' ) ) : ?>
						<h3 class="text-primary-400 text-2xl"><?php echo esc_html($name); ?></h3>
					<?php endif; ?>
					<?php if ( $role = get_sub_field( 'role' ) ) : ?>
						<p class="text-sm text-white"><?php echo esc_html($role); ?></p>
					<?php endif; ?>
					
				</div>
				<div class="text-lg">
					<div class="text-primary-500 text-sm italic">
					<?php if ( $content = get_sub_field( 'content' ) ) : ?>
						<?php echo $content; ?>
					<?php endif; ?>
					</div>
				</div>

				
			</div>
		</li>
	<?php endwhile; ?>
	<?php endif; ?>
	</ul>



</x-section>
</x-container>