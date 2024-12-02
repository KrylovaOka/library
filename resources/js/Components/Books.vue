<template>
    <div class="form-group mt-5 ">
        <select class="form-control" v-model="authorFilter">
            <option :value="null">Все</option>
            <option v-for="author in authors" :key="author.id" :value="author.id">{{author.name}}</option>
        </select>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>№</td>
                <td>Название книги</td>
                <td>Авторы </td>
                <td>Количество авторов</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(book, i) in filtredBooks" :key="book.id">
                <td>{{i+1}}</td>
                <td>{{book.title}}</td>
                <td>
                    <template v-for="(author, j) in book.authors" :key="author.id">
                        <template v-if="j > 0">, </template>
                        {{ author.name }}
                    </template>
                </td>
                <td>{{book.count}}</td>
            </tr>
        </tbody>
    </table>
</template>


<script>
  export default {
    props: ['books', 'authors'],
    data: function() {
        const data = {
            booksData: this.books.map(obj => ({ ...obj, count: obj.authors.length })),
            authorFilter: null,
        }

        return data;
    },

    computed: {
      filtredBooks() {
        return this.booksData.filter(({ authors }) => {
            const authorsId = authors.map((k) => parseInt(k.id));
            return this.authorFilter ? authorsId.includes(parseInt(this.authorFilter)) : true
          }
        );
      },
    },
  };
</script>

