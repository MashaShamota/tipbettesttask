<template>
    <div class="columns">
        <div class="row"  v-if="!error">
            <div class="col-sm-4">
                <ul  v-for="cat in list">
                    <li>
                        <a :class="{'is-active':isActive(cat.name)}" href="#" v-on:click.prevent="fetchCategory(cat.name)">
                            {{ cat.name }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h2>{{ message }} <span v-if="activeItem"> in {{ activeItem }}</span></h2>
                 <ul  v-for="groups in subcats">
                    <li>
                        {{ groups.type }}
                        <ul v-for="item in groups.items">
                            <li>{{ item.venue.name }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div v-else>
            <h2 class="alert alert-danger">{{ notification }}</h2>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                message: 'Explore Valetta',
                notification: 'Sorry, something went wrong',
                list: [],
                subcats: [],
                activeItem: '',
                error: false,
                cat: {
                    name: '',
                },
                item: {
                    venue: {
                        name: '',
                    } 
                }
            }
        },
        created() {
            this.fetchCatsList();
        },
        methods: {
            fetchCatsList() {
                var url = 'categories';
                axios.get(url).then(result => {
                    this.list = result.data
                }).catch(err => {
                    this.error = true;
                    console.log(err);
                });
            },
            fetchCategory(cat) {
                var url = 'category/'+cat;
                this.setActive(cat);
                axios.get(url).then(result => {
                    this.subcats = result.data
                }).catch(err => {
                    this.error = true;
                    console.log(err);
                });
            },
            setActive(item) {
                this.activeItem = item;
            },
            isActive(item) {
                return this.activeItem === item;
            },
        }
    }
</script>