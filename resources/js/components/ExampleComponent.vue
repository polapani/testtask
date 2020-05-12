<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <md-button>Hello</md-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { MdButton, MdContent, MdTabs } from 'vue-material/dist/components'
    import 'vue-material/dist/vue-material.min.css'
    import 'vue-material/dist/theme/default.css'

    Vue.use(MdButton)
    Vue.use(MdContent)
    Vue.use(MdTabs)

    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
