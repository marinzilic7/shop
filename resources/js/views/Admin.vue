<script setup>
import Navigation from "../components/Navigation.vue";
import Footer from "../components/Footer.vue";
</script>

<template>
    <Navigation />
    <div class="container mt-5">
        <div
            class="accordion accordion-flush shadow-lg"
            id="accordionFlushExample"
        >
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne"
                    >
                        Pregled svih korisnika
                    </button>
                </h2>
                <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample"
                >
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Ime Prezime</th>
                                    <th>Email</th>
                                    <th>Uloga</th>
                                    <th>Opcije</th>
                                    <th>Promoviraj</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">
                                                    {{ user.name }}
                                                </p>
                                                <p class="fw-bold mb-0">
                                                    {{ user.surname }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal text-muted mb-1">
                                            {{ user.email }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="fw-normal text-muted mb-1">
                                            {{ user.role }}
                                        </p>
                                    </td>
                                    <td>
                                        <button
                                            type="button"
                                            class="btn btn-link text-danger btn-sm btn-rounded"
                                            @click="deleteUser(user.id)"
                                        >
                                            Izbrisi
                                        </button>
                                    </td>
                                    <td>
                                        <button
                                            v-if="user.role !== 'admin'"
                                            type="button"
                                            class="btn btn-link text-success btn-sm btn-rounded"
                                            data-bs-toggle="modal"
                                            :data-bs-target="
                                                '#exampleModal' + user.id
                                            "
                                        >
                                            Promoviraj
                                        </button>
                                        <button
                                            v-else
                                            type="button"
                                            class="btn btn-link text-success btn-sm btn-rounded text-decoration-line-through"
                                            data-bs-toggle="modal"
                                            :data-bs-target="
                                                '#exampleModal' + user.id
                                            "
                                            disabled
                                        >
                                            Promoviraj
                                        </button>
                                        <div
                                            class="modal fade"
                                            :id="'exampleModal' + user.id"
                                            tabindex="-1"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true"
                                        >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1
                                                            class="modal-title fs-5"
                                                            id="exampleModalLabel"
                                                        >
                                                            Promoviraj korisnika
                                                        </h1>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Dodaj korisnika
                                                        <span
                                                            class="fw-muted fw-bold"
                                                            >{{ user.name }}
                                                            {{
                                                                user.surname
                                                            }}</span
                                                        >
                                                        kao administratora?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button
                                                            type="button"
                                                            class="btn btn-secondary"
                                                            data-bs-dismiss="modal"
                                                        >
                                                            Zatvori
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary"
                                                            @click="
                                                                promoteUser(
                                                                    user.id
                                                                )
                                                            "
                                                        >
                                                            Potvrdi
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo"
                        aria-expanded="false"
                        aria-controls="flush-collapseTwo"
                    >
                        Accordion Item #2
                    </button>
                </h2>
                <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is
                        intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the second
                        item's accordion body. Let's imagine this being filled
                        with some actual content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree"
                        aria-expanded="false"
                        aria-controls="flush-collapseThree"
                    >
                        Accordion Item #3
                    </button>
                </h2>
                <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is
                        intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third
                        item's accordion body. Nothing more exciting happening
                        here in terms of content, but just filling up the space
                        to make it look, at least at first glance, a bit more
                        representative of how this would look in a real-world
                        application.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            users: [],
            message: "",
        };
    },
    created() {
        this.getUsers();
    },
    methods: {
        getUsers() {
            axios
                .get("/getUsers")
                .then((response) => {
                    this.users = response.data.users;
                    console.log(this.users);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deleteUser(id) {
            axios
                .post(`/deleteUser/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    this.getUsers();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        promoteUser(id) {
            axios
                .post(`/promoteUser/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    $("#exampleModal" + id).modal("hide");
                    this.getUsers();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
