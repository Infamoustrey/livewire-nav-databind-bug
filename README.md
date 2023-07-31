# Navigation Bug

This repo reproduces an bug in livewire where components are not properly evaluated between navigations when dealing with modelable attributes of childrencomponents. 

Steps:

1. Clone and Install deps
2. Run `php artisan serve`
3. Go to the root page and see the following 

<img height="175" src="./images/step-3.png" />

4. Enter some input, the value is tracked live with no issue(uses ).

<img height="175" src="./images/step-4.png" />

5. Then navigate to page 2 using link(uses `wire:navigate`)

<img height="125" src="./images/step-5.png" />

6. Navigate back to page 1 using link, enter input, value is no longer live.

<img height="175" src="./images/step-6.png" />