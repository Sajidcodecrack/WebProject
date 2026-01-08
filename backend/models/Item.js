const mongoose = require("mongoose");

const itemSchema = new mongoose.Schema(
  {
    title: String,
    price: Number,
    image: String,
    imageUrl: String,
    status: { type: String, enum: ["available", "sold"], default: "available" },
    seller: { type: mongoose.Schema.Types.ObjectId, ref: "User" },
  },
  { timestamps: true }
);

module.exports = mongoose.model("Item", itemSchema);
