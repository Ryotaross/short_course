import './bootstrap'
import Vue from 'vue'
import CourseLike from './components/CourseLike'
import CourseWent from './components/CourseWent'

const app = new Vue({
  el: '#app',
  components: {
    CourseLike,
    CourseWent,
  }
})
