<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
			rel="stylesheet"
		/>
		<title>Tailwind + Alpine</title>
	</head>
	<body
		x-data="sidebar()"
		class="text-gray-700 bg-gray-200"
		@resize.window="handleResize()"
	>
		<div class="xl:flex">
			<div
				x-show="isOpen()"
				class="fixed inset-0 flex h-screen bg-white bg-opacity-75 xl:static"
			>
				<div
					@click.away="handleAway()"
					class="text-white bg-gray-800 shadow w-80"
				>
					<div class="flex content-between bg-gray-900">
						<div class="w-full p-3">Project Sidebar</div>
						<a
							@click.prevent="handleClose()"
							class="flex items-center flex-1 p-3 hover:bg-indigo-500"
							href="#"
						>
							<svg
								class="w-5 h-5"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</a>
					</div>
					<a
						class="flex items-center w-full p-3 hover:bg-indigo-500"
						href="#"
					>
						<svg
							class="w-6 h-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
							/>
						</svg>
						Home
					</a>
					<a
						class="flex items-center w-full p-3 hover:bg-indigo-500"
						href="#"
						><svg
							class="w-6 h-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
							/>
						</svg>
						Resources
					</a>
					<a
						class="flex items-center w-full p-3 hover:bg-indigo-500"
						href="#"
						><svg
							class="w-6 h-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
							/>
						</svg>
						Statistics
					</a>
					<a
						class="flex items-center w-full p-3 hover:bg-indigo-500"
						href="#"
						><svg
							class="w-6 h-6 mr-3"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
							/>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
							/>
						</svg>
						Settings
					</a>
				</div>
			</div>
			<div>
				<nav class="flex text-gray-700 bg-white">
					<div x-show="!isOpen()" class="flex">
						<a
							x-show="!isOpen()"
							@click.prevent="handleOpen()"
							class="p-3 hover:bg-indigo-500 hover:text-white"
							href="#"
						>
							<svg
								class="w-6 h-6"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M4 6h16M4 12h16M4 18h16"
								/>
							</svg>
						</a>
						<a
							class="p-3 hover:bg-indigo-500 hover:text-white"
							href="#"
						>
							Project Sidebar
						</a>
					</div>
					<div class="flex ml-auto">
						<a
							class="p-3 hover:bg-indigo-500 hover:text-white"
							href="#"
						>
							Account
						</a>
					</div>
				</nav>
				<main class="grid gap-4 p-4 md:grid-cols-2 lg:grid-cols-3">
					<div class="shadow-lg">
						<div class="px-4 py-3 text-white bg-indigo-500">
							Lorem Ipsum
						</div>
						<p class="p-4 bg-white">
							Lorem ipsum dolor sit amet, consectetur adipiscing
							elit. Nam euismod est at nunc rutrum, sit amet
							eleifend magna lacinia. Nullam pharetra suscipit
							ultricies. Nulla aliquet porttitor porta. Sed
							finibus pretium diam, vitae volutpat arcu accumsan
							a. Class aptent taciti sociosqu ad litora torquent
							per conubia nostra, per inceptos himenaeos.
							Suspendisse potenti. Suspendisse lacus ante, aliquet
							in dignissim non, ultrices lobortis metus. Integer
							auctor laoreet odio et molestie. Maecenas semper
							egestas justo, nec tincidunt augue.
						</p>
					</div>
					<div class="shadow-lg">
						<div class="px-4 py-3 text-white bg-indigo-500">
							Lorem Ipsum
						</div>
						<p class="p-4 bg-white">
							Lorem ipsum dolor sit amet, consectetur adipiscing
							elit. Nam euismod est at nunc rutrum, sit amet
							eleifend magna lacinia. Nullam pharetra suscipit
							ultricies. Nulla aliquet porttitor porta. Sed
							finibus pretium diam, vitae volutpat arcu accumsan
							a. Class aptent taciti sociosqu ad litora torquent
							per conubia nostra, per inceptos himenaeos.
							Suspendisse potenti. Suspendisse lacus ante, aliquet
							in dignissim non, ultrices lobortis metus. Integer
							auctor laoreet odio et molestie. Maecenas semper
							egestas justo, nec tincidunt augue.
						</p>
					</div>
				</main>
			</div>
		</div>
		<script>
			function sidebar() {
				const breakpoint = 1280
				return {
					open: {
						above: true,
						below: false,
					},
					isAboveBreakpoint: window.innerWidth > breakpoint,

					handleResize() {
						this.isAboveBreakpoint = window.innerWidth > breakpoint
					},

					isOpen() {
						console.log(this.isAboveBreakpoint)
						if (this.isAboveBreakpoint) {
							return this.open.above
						}
						return this.open.below
					},
					handleOpen() {
						if (this.isAboveBreakpoint) {
							this.open.above = true
						}
						this.open.below = true
					},
					handleClose() {
						if (this.isAboveBreakpoint) {
							this.open.above = false
						}
						this.open.below = false
					},
					handleAway() {
						if (!this.isAboveBreakpoint) {
							this.open.below = false
						}
					},
				}
			}
		</script>
		<script
			src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
			defer
		></script>
	</body>
</html>