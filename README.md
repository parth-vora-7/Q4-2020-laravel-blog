Base API URL: http://127.0.0.1:8000/graphql

GraphQL queries:

query {
  getAllPosts {
    id, title
  }
}

query {
  postWithPagination(first: 5) {
    data {
      id
      title
    }
    paginatorInfo {
      currentPage
      lastPage
    }
  }
}

query {
  getPostById(id: 5) {
    id, title, body
  }
}

query {
  getPostBySlug(slug: "post-3") {
    id, title, body
  }
}

mutation {
  createPost(title: "Post 1", body: "Post 1 body") {
    id
    title,
    body
  }
}

mutation {
  updatePost(id: 1, title: "Post 1 updated", body: "Post 1 body updated") {
    id
    title,
    body
  }
}

mutation {
  deletePost(id: 1) {
    id
    title,
    body
  }
}