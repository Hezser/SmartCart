def suggestions(items_chosen, list_items, cheap, popularity):
    categories {
    "fruits":0,
    "vegetables":0,
    "desserts":0,
    "fish":0,
    "others":0,
    "charcuterie":0,
    "sweets":0,
    "precooked":0,
    "nuts":0,
    "ingredients":0,
    "pasta":0,
    "drinks":0,
    "alcohol":0,
    "snacks":0,
    "pets":0,
    "cheese":0
    }
    suggested_items = []

    for item in items_chosen:
        item_categories = item[categories].split()
        for c in item_categories:
            categories[c] += 1

    for item in suggested_items:
        item_c = [item[category].split()]
        for c in item_c:
            if categories[c] > 0:
                suggested_items.append(item)

    if cheap == 1:
        for item in list_items if item["price"] > 1.5:
            suggested_items.remove(item)
    if popular == 1:
        for item in list_items if item["popularity"] < 2:
            suggested_items.remove(item)

    return suggested_items
