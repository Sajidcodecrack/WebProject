const Item = require("../models/Item");

exports.createItem = async (req, res) => {
  const item = await Item.create({
    ...req.body,
    seller: req.user.id,
  });
  res.status(201).json(item);
};

exports.getItems = async (req, res) => {
  const items = await Item.find({ status: "available" }).populate("seller", "name");
  res.json(items);
};
